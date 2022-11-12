@extends('layouts.plantilla')

@section('title','Crear contenido')

<link rel="stylesheet" href="{{asset('css/create-content.css')}}" />

@section('content')

    <h1 id="title-h1" class="text-center">Vista crear videos</h1>
    <a href="{{route('home.index')}}"><img src="{{ asset('/img/icons/regresar.png')}}"></a> 

    
    <div class="container text-center w-50">

        {{-- Otro crear contenido --}}

        <form class="p-3 m-3" action="{{route('contenido.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card" >
                <div class="card-title m-1">
                    <div class="form-group">
                        <label for="">Titulo de la imagen</label>
                        <input type="text" name="title" class="form-control" id="" aria-describedby="" value="{{old('title')}}">
                          @error('title')
                                  <br>
                                      <small class="text-danger">{{$message}}</small>
                                  <br>
                          @enderror
                      </div>
                </div>
            <div class="form-group m-1">
                <label for="exampleFormControlFile1" id="src-file">Escoge una imagen</label><br>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*" value="{{old('file')}}">
                @error('file')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                @enderror
            </div>
              <div class="form-group m-1">
                <label for="">Autor</label>
                    <input type="text" name="autor" class="form-control" id="" aria-describedby="" value="{{old('autor')}}">
                @error('autor')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                @enderror
              </div>
              <div class="form-group m-1">
                <label for="">Descripción</label>
                    <input type="text" name="description" class="form-control" id="" aria-describedby="" value="{{old('description')}}">
                @error('description')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                @enderror
              </div>
            <button type="submit" class="btn btn-primary mt-2 m-3">Subir</button>
            </div>
          </form>
    </div>
          
@endsection
