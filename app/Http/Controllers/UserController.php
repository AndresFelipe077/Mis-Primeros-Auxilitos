<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;
use App\Models\Contenido;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function show()
    {
        if(Auth::check())
        {
            $contenidos = Contenido::orderBy('id','desc')->paginate(5);
            return view('home.index', compact('contenidos'));
        } 
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credencials = $request->getCredentials();
        
        if(!Auth::validate($credencials))
        {

            return redirect()->to('/login')->withErrors('Correo y/o contraseña incorrectos');
        }
    
        $user = Auth::getProvider()->retrieveByCredentials($credencials);

        Auth::login($user);

        return $this->authenticate($request, $user);

    }

    public function authenticate(Request $request, $user)
    {
        return redirect()->route('home.index');
    }

    //Registro
    public function showRegister()
    {
        if(Auth::check())
        {
            $contenidos = Contenido::orderBy('id','desc')->paginate(5);
            return view('home.index', compact('contenidos'));
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->validated());
        return redirect('login')->with('Exito','cuenta creada exitosamente!!!');
    }

    //Editar
    public function edit(User $registro)
    {
        if(Auth::check())
        {
            return view('auth.edit', compact('registro'));
        }
        else
        {
            $contenidos = Contenido::orderBy('id','desc')->paginate(5);
            return view('home.index', compact('contenidos'));  
        }   
    }

    public function update(Request $request, User $registro)
    {      
        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();

        $ruta = storage_path() . '\app\public\images/' . $nombre;

        Image::make($request->file('file'))
            ->resize(800, null, function($constraint){
                $constraint->aspectRatio();
            })
            ->save($ruta);
        
        

        $registro->name            = $request->name;
        $registro->avatar          = '/storage/images/' . $nombre;
        $registro->genero          = $request->genero;
        $registro->fechaNacimiento = $request->fechaNacimiento;

        $registro->save();
        

        return redirect()->route('home.index', compact('registro'));
    }

    //Logout
    public function logout()
    {
        Session::flush();//Para liberar

        Auth::logout();
        
        return redirect()->to('/login');

    }

    public function destroy(User $registro)
    {
        $registro->delete();

        return redirect()->route('login');
    }

    //Logueo con redes sociales

    // //Google login
    // public function redirectToGoogle()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // //Google callback
    // public function handleGoogleCallback()
    // {
    //     $user = Socialite::driver('google')->user();

    //     $this->_registerOrLoginUser($user);

    //     //Retorna a la vista de home cuando se loguee
    //     return redirect()->route('home.index');

    //     /*

    //     $user = User::where('email', $userSocialite->getEmail())->first();
        
    //     if(!$user)
    //     {
    //         // Auth::login($userSocialite);
    //         $user = User::create([
    //             'name' => $userSocialite->getName(),
    //             'avatar' => $userSocialite->getAvatar(),
    //             'email' => $userSocialite->getEmail(),
    //         ]);
    //     }
        

    //         $social_profile = SocialProfile::where('social_id', $userSocialite->getId())->first();
    //                                     //  ->where('social_name', $driver)->first();
    
            
    //         if(!$social_profile)
    //         {
    //             //Sino existe registro se registra con lo de abajo
    //             SocialProfile::create([
    //                 'user_id' => $user->id,
    //                 'social_id' => $userSocialite->getId,
    //             ]);
    //         }

    //         // auth()->login($user);
            
    //         Auth::login($user);
    //         return redirect()->route('home.index');

    //         */

    // }

    // //Facebook login
    // public function redirectToFacebook()
    // {
    //     return Socialite::driver('facebook')->redirect();
    // }

    // //Facebook callback
    // public function handleFacebookCallback()
    // {

    //     $user = Socialite::driver('facebook')->user();  
        
    //     $this->_registerOrLoginUser($user);

    //     //Retorna a la vista de home cuando se loguee
    //     return redirect()->route('home.index');

    // }

    // protected function _registerOrLoginUser($data)
    // {
    //     $user = User::where('email', '=', $data->email)->first();
    //     if(!$user)
    //     {
    //         $user->name = $data->name;
    //         $user->email = $data->email;
    //         $user->provider_id = $data->id;
    //         $user->avatar = $data->avatar;
    //         $user->save();
    //     }

    //     Auth::login($user);

    // }



}//Fin UserController
