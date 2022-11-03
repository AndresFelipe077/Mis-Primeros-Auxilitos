@extends('layouts.plantilla')

@section('title','Create')

@section('content')

<br><br><br><br><br><br>
    <h1>Vista crear videos</h1>
    <form action="{{route('contenido.update', $contenido)}}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('put')

        <div class="card">
            
            <div class="card-header">CREAR CONTENIDO</div>
            <div class="card-body">
                <a id="a-regresar-perfil" href="{{route('home.index')}}">regresar</a>
                <div>
                    <label for="">Titulo</label>
                        <input type="text" name="title" value="{{old('title',$contenido->title)}}" required>
                        @error('title')
                            <br>
                                <small>* {{$message}}</small>
                            <br>
                        @enderror
                </div>
                <div>
                    <label for="">Video y/o imagen</label>
                        <img src="{{ asset($contenido->url) }}" width="100px" height="100px">
                            <input type="file" name="file" value="{{old('file',$contenido->url)}}" accept="image/*" required>
                        @error('file')
                            <br>
                                <small>* {{$message}}</small>
                            <br>
                        @enderror
                </div>
                <div>
                    <label for="">Autor</label>
                        <input type="text" name="autor" value="{{old('autor',$contenido->autor)}}" required>                  
                        @error('autor')
                            <br>
                                <small class="text-danger">{{$message}}</small>
                            <br>
                        @enderror  
                </div>
                <div>
                    <label for="">Descripción</label>
                        <input type="text" name="description" value="{{old('description',$contenido->description)}}" required>
                        @error('description')
                            <br>
                                <small>* {{$message}}</small>
                            <br>
                        @enderror
                </div>               
                <button type="submit">Actualizar</button>
            </div>
        </div>
    </form>


    <form method="POST" action="{{route('contenido.destroy', $contenido)}}">
        @csrf
        @method('delete')
        <button type="submit" id="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar el contenido?')">Borrar contenido</button>
    </form>
    


@endsection