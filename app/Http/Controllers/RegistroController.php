<?php

namespace App\Http\Controllers;

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

    /*
    //Mostrar
    public function show()
    {
        return view('menu');
    }
    */



}
