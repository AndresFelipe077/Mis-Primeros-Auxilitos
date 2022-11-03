@extends('layouts.plantilla')

@section('title','Home')

{{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> --}}

@section('content')
<body class="body-index">

    <div class="gallery">
        
        @foreach($contenidos as $contenido)                     
                {{-- <div class="container mx-md-n5">
                    <div class="row">
                        <div class="col-sm-4 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    {{$contenido->title}}
                                </div>
                                <div class="card-body">
                                    <h5 class="card-little"></h5>
                                    <p class="card-text">{{$contenido->description}}</p>
                                <a href="" class="btn btn-primary">go</a>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>
                </div>              --}}

                <div class="col mb-4" style="display: flex;
                                            justify-content: center !important;">

                    <div class="card border-dark text-bg-info" style="width: 15rem;">
                        <div class="card-header">
                            {{$contenido->title}}  
                        </div>
                        <div class="card-body ">
                            <img class="card-img-top" src="{{ asset($contenido->url) }}" alt="">
                            <p><strong>Autor: </strong> {{$contenido->autor}}</p>
                            <p class="card-text">    
                                {{$contenido->description}}
                            </p>
                            <a href="#" class="btn btn-primary">link</a>
                        </div>

                    </div>

                </div>

        @endforeach    
    {{$contenidos->links()}}      
</div>
{{-- {{$contenidos->links()}} --}}
 

@endsection

