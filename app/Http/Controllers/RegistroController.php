<?php

namespace App\Http\Controllers;
use App\Models\Registro;
use Illuminate\Support\Facades\Auth;

//Para la fecha
use Carbon\Carbon;

use Illuminate\Http\Request;

class RegistroController extends Controller
{

    //Login
    public function index()
    {
        //$registro = Registro::all();
        

    return view('registro.index'/*, compact('registro')*/);
    }

    public function validar(Request $request)
    {
        $registro = new Registro();

        if($registro->correo = $request->correo && $registro->contrasena = $request->contrasena)
        {
            return redirect()->route('index');
        }
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
        $registro->genero = $request->nombre;
        $registro->fechaNacimiento = $request->fechaNacimiento;
        $registro->contrasena = $request->contrasena;
        $registro->confirmarContrasena = $request->confirmarContrasena;

        $registro->save();

        return redirect()->route('registro.index');
        
    }

}
