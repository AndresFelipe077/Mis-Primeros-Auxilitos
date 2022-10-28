<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;
//Para la fecha
use Carbon\Carbon;

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

}//Fin UserController
