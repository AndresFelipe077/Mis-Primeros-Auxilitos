@extends('layouts.plantilla')

@section('title','Home')


<!--estilos-->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
@section('content')
<body class="body-index">

    <div class="gallery">
    {{-- Cuando se borra algun contenido --}}
    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El contenido se elimino exitosamente.',
                'success'
            )
        </script>
    @endif
    
    @if(session('subir') == 'ok')
        <script>
            Swal.fire(
                '¡Contenido subido!',
                '¡El envio ha sido un exito!.',
                'success'
            )
        </script>
    @endif
        
        @foreach($contenidos as $contenido)
             

                <div class="col mb-4" style="display: flex;
                                            justify-content: center !important;">

                    <div class="card shadow border-dark text-bg-info" style="width: 15rem;">
                        <div class="card-header">
                            {{$contenido->title}}  
                        </div>
                        <div class="card-body ">
                            <div class="inner">
                            <img class="card-img-top rounded-3" src="{{ asset($contenido->url) }}" alt="" width="200px" height="200px">
                            </div>
                            <p><strong>Autor: </strong> {{$contenido->autor}}</p>
                            <p class="card-text">    
                                {{$contenido->description}}
                            </p>
                            <a href="{{route('contenido.edit', $contenido)}}" class="btn btn-primary">Editar</a>
                        </div>

                    </div>

                </div>

        @endforeach    
    {{$contenidos->links()}}      
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection

