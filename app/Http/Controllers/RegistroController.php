<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Session;

//Para la fecha
use Carbon\Carbon;


class RegistroController extends Controller
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
        return redirect('/home');
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
        
        return view('auth.edit', compact('registro'));
        
    }

    
    public function update(RegisterRequest $request, User $registro)
    {

        $registro->name                  = $request->name;
        $registro->email                 = $request->email;
        $registro->genero                = $request->genero;
        $registro->fechaNacimiento       = $request->fechaNacimiento;
        $registro->password              = $request->password;
        $registro->password_confirmation = $request->password_confirmation;

        $registro->save();


        return redirect()->route('auth.edit');
    }


    //Logout

    public function logout()
    {
        Session::flush();//Para liberar

        Auth::logout();
        
        return redirect()->to('/login');

    }

    /*

    //Login
    public function index()
    {
        //$registro = Registro::all();
        

    return view('registro.index'/*, compact('registro'));
    }

    public function validar(Request $request)
    {
        /*
        // Retrieve the currently authenticated user...
        $user = Auth::user();
 
        // Retrieve the currently authenticated user's ID...
        $id = Auth::id();

        if (Auth::check()) {
            // The user is logged in...
        }


        $credentials = $request->validate([
            'email' => ['required', 'correo'],
            'contrasena' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('registro.create');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }

    protected function redirectTo($request)
    {
        return route('index');
    }

    

    //Registro
    public function create()
    {
        return view('registro.create');
    }

    public function store(Request $request){
  
        $registro = new Registro();

        $registro->nombre              = $request->nombre;
        $registro->correo              = $request->correo;
        $registro->genero              = $request->genero;
        $registro->fechaNacimiento     = $request->fechaNacimiento;
        $registro->contrasena          = $request->contrasena;
        $registro->confirmarContrasena = $request->confirmarContrasena;

        $registro->save();


        return redirect()->route('registro.index');

    }


    public function edit(Registro $registro)
    {
        
        // return $registro;
        return view('registro.edit', compact('registro'));
    }

    public function update(Request $request, Registro $registro)
    {
        
        $registro->nombre = $request->nombre;
        $registro->correo = $request->correo;
        $registro->genero = $request->genero;
        $registro->fechaNacimiento = $request->fechaNacimiento;
        $registro->contrasena = $request->contrasena;
        $registro->confirmarContrasena = $request->confirmarContrasena;

        $registro->save();

        return redirect()->route('registro.index');
        
    }
*/
}
