<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contenido;

class HomeController extends Controller
{
    //Vista home de videos
    public function index()
    {
        $contenidos = Contenido::orderBy('id','desc')->paginate();
        // return $contenido;
        return view('home.index', compact('contenidos'));
    }

    //Vista configuracion
    public function ajustes()
    {
        return view('home.ajustes');
    }

    public function create()
    {       
        return view('home.create');
    }

    public function store(Request $request)
    {
        $contenido = new Contenido();
        $contenido->title = $request->title;
        $contenido->file = $request->file;
        $contenido->description = $request->description;

        $contenido->save();

        return redirect()->route('home.index');
    }


    public function edit(Contenido $contenido)
    {
        return view('home.edit',compact('contenido'));
    }

    public function update(Request $request, Contenido $contenido)
    {
        $contenido->title = $request->title;
        $contenido->file = $request->file;
        $contenido->description = $request->description;
        $contenido->save();

        return redirect()->route('home.index');
    }


    public function destroy(Contenido $contenido)
    {
        $contenido->delete();

        return redirect()->route('home.index');
    }
            

}
