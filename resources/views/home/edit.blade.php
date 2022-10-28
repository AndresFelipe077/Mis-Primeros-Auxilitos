@extends('layouts.plantilla')

@section('title','Create')

@section('content')

<br><br><br><br><br><br>
    <h1>Vista crear videos</h1>
    <form action="{{route('edit.contenido.update', $contenido)}}" method="POST">

        @csrf

        @method('put')

        <div class="card">
            <div class="card-header">CREAR CONTENIDO</div>
            <div class="card-body">
                <div>
                    <label for="">Titulo</label>
                    <input type="text" name="title" value="{{$contenido->title}}" required>
                </div>
                <div>
                    <label for="">Video y/o imagen</label>
                    <input type="file" name="file" value="{{$contenido->file}}" required>
                </div>
                <div>
                    <label for="">Descripción</label>
                    <input type="text" name="description" value="{{$contenido->description}}" required>
                </div>
                <button type="submit">Actualizar</button>
            </div>
        </div>
    </form>


    <form method="POST" action="{{route('registro.contenido.destroy', $contenido)}}">
        @csrf
        @method('delete')
        <button type="submit" id="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar el contenido?')">Borrar contenido</button>
    </form>
    


@endsection