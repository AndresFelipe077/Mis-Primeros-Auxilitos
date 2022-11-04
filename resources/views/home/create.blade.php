@extends('layouts.plantilla')

@section('title','Crear contenido')

<link rel="stylesheet" href="{{asset('css/style.css')}}">

@section('content')

<br><br><br><br><br><br>

<a id="a-regresar-perfil" href="{{route('home.index')}}">regresar</a>

{{-- <div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      An example success alert with an icon
    </div>
  </div> --}}

    <h1>Vista crear videos</h1>
    <form action="{{route('contenido.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="card">
            <div class="card-header">CREAR CONTENIDO</div>
            <div class="card-body">
                <div>
                    <label for="">Titulo</label>
                    <input type="text" name="title" value="" required>
                    @error('title')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div>
                    <label for="">Video y/o imagen</label>
                    <input type="file" name="file" value="" accept="image/*" required>
                    <br>
                    @error('file')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                    @enderror
                </div>
                <div>
                    <label for="">Autor</label>
                    <input type="text" name="autor" value="" required>
                    @error('autor')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                    @enderror      
                </div>
                <div>
                    <label for="">Descripción</label>
                    <input type="text" name="description" value="" required>
                    <br>
                    @error('description')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                    @enderror
                    <br>
                </div>
                <button type="submit">Subir</button>
            </div>
        </div>
    </form>
    
    

@endsection
