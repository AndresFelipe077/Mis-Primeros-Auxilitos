<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;

use App\Models\SocialProfile;
use App\Models\User;


class UserController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $credencials = $request->getCredentials();

        if(!Auth::validate($credencials))
        {
            return redirect()->to('/login')->withErrors('auth.failed');
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

        /*$registro = User::find($registro);*/
        
        return view('auth.edit', compact('registro'));
        
    }

    public function update(Request $request, User $registro)
    {
        $registro->fill($request->all());
        
        /*
        $registro->name            = $request->name;
        $registro->genero          = $request->genero;
        $registro->fechaNacimiento = $request->fechaNacimiento;
        */
        
        $registro->save();
        

        return redirect()->route('auth.edit', compact('registro'));
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

    //Google login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    //Google callback
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $this->_registerOrLoginUser($user);

        //Retorna a la vista de home cuando se loguee
        return redirect()->route('home.index');

        /*

        $user = User::where('email', $userSocialite->getEmail())->first();
        
        if(!$user)
        {
            // Auth::login($userSocialite);
            $user = User::create([
                'name' => $userSocialite->getName(),
                'avatar' => $userSocialite->getAvatar(),
                'email' => $userSocialite->getEmail(),
            ]);
        }
        

            $social_profile = SocialProfile::where('social_id', $userSocialite->getId())->first();
                                        //  ->where('social_name', $driver)->first();
    
            
            if(!$social_profile)
            {
                //Sino existe registro se registra con lo de abajo
                SocialProfile::create([
                    'user_id' => $user->id,
                    'social_id' => $userSocialite->getId,
                ]);
            }

            // auth()->login($user);
            
            Auth::login($user);
            return redirect()->route('home.index');

            */

    }

    //Facebook login
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    //Facebook callback
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();  
        
        $this->_registerOrLoginUser($user);

        //Retorna a la vista de home cuando se loguee
        return redirect()->route('home.index');

    }

    protected function _registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if(!$user)
        {
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->save();
        }

        Auth::login($user);

    }



}//Fin UserController
