<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contenido;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    //Vista home de videos
    public function index()
    {
        $contenidos = Contenido::orderBy('id','desc')->paginate(5);
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

        $request->validate([
            'title'        => 'required|max:50',
            'file'         => 'required|image',
            'description'  => 'required'
        ]);

        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();

        $ruta = storage_path() . '\app\public\images/' . $nombre;

        

        Image::make($request->file('file'))
            ->resize(800, null, function($constraint){
                $constraint->aspectRatio();
            })
            ->save($ruta);

        Contenido::create([
            'title'       => $request->title,
            'url'         => '/storage/images/' . $nombre,
            'description' => $request->description,
        ]);

        return redirect()->route('home.index');
    }


    public function edit(Contenido $contenido)
    {
        // $contenido::where('url', auth()->user()->id)->paginate(5);
        return view('home.edit',compact('contenido'));
    }

    public function update(Request $request, Contenido $contenido)
    {
        $request -> validate([
            'title'        => 'required|max:50',
            'file'         => 'required|image',
            'description'  => 'required'
        ]);
        
        $nombre = Str::random(10) . $request->file('file')->getClientOriginalName();

        $ruta = storage_path() . '\app\public\images/' . $nombre;

        

        Image::make($request->file('file'))
            ->resize(800, null, function($constraint){
                $constraint->aspectRatio();
            })
            ->save($ruta);

        $contenido->title = $request->title;
        $contenido->url = '/storage/images/' . $nombre;
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
