<?php

namespace App\Http\Controllers;
use App\Models\Registro;

//Para la fecha
use Carbon\Carbon;

use Illuminate\Http\Request;

class RegistroController extends Controller
{

    

    //Login
    public function index()
    {
        return view('registro.index');
    }

    //Registro
    public function create()
    {
        return view('registro.create');
    }

    public function store(Request $request){
        
        $registro = new Registro();

        $registro->nombre = $request->nombre;
        $registro->correo = $request->correo;
        $registro->genero = $request->nombre;
        $registro->fechaNacimiento = $request->fechaNacimiento;
        $registro->contrasena = $request->contrasena;
        $registro->confirmarContrasena = $request->confirmarContrasena;

        $registro->save();

        return redirect()->route('registro.edit');

    }


    public function edit(Registro $registro)
    {
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
        // return $request->all();
        

    }

    /*
    //Mostrar
    public function show()
    {
        return view('menu');
    }
    */



}
