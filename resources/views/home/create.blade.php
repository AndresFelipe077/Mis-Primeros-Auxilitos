@extends('layouts.plantilla')

@section('title','Create')


@include('layouts.partials.header')

@section('content')

<br><br><br><br><br><br>

<a id="a-regresar-perfil" href="{{route('home.index')}}">regresar</a>

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
    
    
@include('layouts.partials.footer')
@endsection
