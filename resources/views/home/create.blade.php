@extends('layouts.plantilla')

@section('title','Crear contenido')

<link rel="stylesheet" href="{{asset('css/create-content.css')}}">

@section('content')

    <h1 id="title-h1" class="text-center">Vista crear videos</h1>
    <a href="{{route('home.index')}}"><img src="{{ asset('/img/icons/regresar.png')}}"id="a-regresar-perfil"></a> 

    
    <div class="container text-center w-50">

        {{-- Otro crear contenido --}}

        <form class="p-3 m-3" action="{{route('contenido.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card" >
                <div class="card-title m-1">
                    <div class="form-group">
                        <label for="">Titulo de la imagen</label>
                        <input type="text" name="title" class="form-control" id="" aria-describedby="" >
                          @error('title')
                                  <br>
                                      <small class="text-danger">{{$message}}</small>
                                  <br>
                          @enderror
                      </div>
                </div>
            <div class="form-group m-1">
                <label for="exampleFormControlFile1" id="src-file">Escoge una imagen</label><br>
                    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" accept="image/*">
                @error('file')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                @enderror
            </div>
              <div class="form-group m-1">
                <label for="">Autor</label>
                    <input type="text" name="autor" class="form-control" id="" aria-describedby="" >
                @error('autor')
                        <br>
                            <small class="text-danger">{{$message}}</small>
                        <br>
                @enderror
              </div>
              <div class="form-group m-1">
                <label for="">Descripción</label>
                    <input type="text" name="description" class="form-control" id="" aria-describedby="" >
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

{{--     
<input name='input=file' id='input-file' type='file' />
<br />
<img id='imgSalida' width='50%' height='50%' src='Imagen a cargar' />

<script>
    $(window).load(() => {
  $(() => {
    const image = $('#imgSalida')
    const inputFile = $('#input-file')
    
    inputFile.change(async (e) => {
      await addImage(e)
    });

    const addImage = async (e) => {
      const file = e.target.files[0], imageType = /image.*/

      if (!file.type.match(imageType)) {
        cleanImage()
        return;
      }

      const reader = new FileReader()
      reader.onload = await fileOnload
      reader.readAsDataURL(file)
    }
    
    const cleanImage = () => {
      image.css({ display: 'none' })
      image.attr('src', '')
    }

    const fileOnload = async (e) => {
      const result = e.target.result
      image.css({ display: 'block' })
      image.attr('src', result)
    }
    
  });
});
</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<label>Imagen:</label>
<input type="file" class="form-control" name="imagen" id="imagen" maxlength="256" placeholder="Imagen">
<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
<img src="" width="150px" height="120px" id="imagenmuestra">
<script src="js/previsualizar-img.js"></script> --}}
@endsection
