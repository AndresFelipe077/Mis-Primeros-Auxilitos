@extends('layouts.plantilla')

@section('title','Home')


@section('content')
<body class="body-index">
 
    <div class="gallery">
        
        @foreach($contenidos as $contenido)                         
                <div class="gallery_contenido">
                    <div class="card-header">{{$contenido->title}}</div>
                        <!-- Div del video -->
                        <div>
                            {{-- {{$contenido->url}} --}}
                            <img class="img-index" src="{{ asset($contenido->url) }}" alt="" width="200px" height="200px">
                            {{-- <iframe id="iframe-video-image" src="https://www.youtube.com/embed/gufP4U6Xp8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  --}}
                        </div>          
                        <div>
                            <p><strong>Autor: </strong> Andres</p>
                            <p>me gusta</p>
                        </div>         
                    <p>{{$contenido->description}}</p>
                    <a href="{{route('home.edit', $contenido)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-plus-circle-fill text-success" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                        </svg>
                    </a> 
                </div>               
        @endforeach
        
        
        
        <!-- <iframe class="gallery_img" src="https://www.youtube.com/embed/gufP4U6Xp8Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rKIMDP4BQMI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/5mWxmgcr8KA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <iframe class="gallery_img" width="560" height="315" src="https://www.youtube.com/embed/rXiBaLHxHKw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
     

</div>
{{$contenidos->links()}}

@endsection

