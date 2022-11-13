<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL</title>
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
    
</head>
<body class="body-perfil">

    <a id="a-regresar-perfil" href="{{route('home.index')}}">regresar</a>

    <form class="form1" action="" method="POST">

    <div class="container-padre1">

        <div class="container-hijo-1">
            <label id="label-name" for="">PERFIL</label>
        </div>

        <div class="container-hijo-1">
            <img type="file" name="file" class="imagen-perfil-perfil" src="{{asset($registro->avatar)}}" width="250px" height="250px" accept="image/*">
        </div>

        <div class="container-hijo1">
            <label for="" id="label-name">{{$registro->name}}</label>
        </div>

        {{-- <div class="container-hijo-1">

            <input type="file" id="btn-cambiar-imagen-perfil" name="avatar" value="" accept="image/*" required>
                     
        </div> --}}
        
    </div>

    </form>

    <!--Inicio-->
    <div class="container-padre"> <!--inicio-->
        
        <div class="container-1">
            
            <div class="container-perfil-datos">
                <label  for="">Nombre: {{$registro->name}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Correo: {{$registro->email}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Genero: {{$registro->genero}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Fecha de nacimiento: {{$registro->fechaNacimiento}}</label>
            </div>
            <div class="container-perfil-datos">
                <button type="submit" class="btn-cambiar-contrasena-perfil"> Cambiar contraseña </button>
            </div>

        </div>

        <div class="container-2">

            <div class="container-logros-padre">
                <div class="container-logros-perfil">
                    <label for="">Retos ganados: 10</label>
                </div>
            </div>
    
            <form method="POST" action="{{route('registro.destroy', $registro)}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" id="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar tu cuenta?')">Borrar cuenta</button>
            </form>
    
        </div>

    </div>
        
    <!--Fin-->

    <form class="form1" action="{{route('edit.update', $registro)}}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('put')

        <div class="container-perfil-datos-padre2">
            <div class="form">
                <h3 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h3>
                <h4 id="tituloRegistro">Registro</h4>


                <div class="card" >
                    <div class="card-title m-1">
                        <div class="form-group m-1">
                            <label for="exampleFormControlFile1" id="src-file">Escoge una imagen</label><br>
                            <input type="file" name="file" value="{{old('avatar',$registro->avatar)}}" accept="image/*">
                            {{-- @error('file')
                                    <br>
                                        <small class="text-danger">{{$message}}</small>
                                    <br>
                            @enderror --}}
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input class="form-control" type="text" name="name" id="name" required value="{{$registro->name}}"><span class="barra"></span>
                          @error('name')
                                  <br>
                                      <small class="text-danger">{{$message}}</small>
                                  <br>
                          @enderror
                      </div>
                
                  <div class="form-group m-1">
                    <label for="">Genero</label>
                    <div>
                       </div>
                       <label>
                           <input name="genero" class="custom-checkbox" value="Masculino" type="checkbox">
                           <span><label class="label1" for="">Masculino</label></span>
                           {{-- @if(Thisform.Check3.Value=1)
                                
                                Thisform.Check3.ForeColor="(0,0,128)"
                           
                           @endif --}}
                       </label>
                       <label>
                           <input name="genero" class="custom-checkbox" value="Femenino" type="checkbox" >
                           <span><label class="label1" for="">Femenino</label></span>
                       </label>
                       <label>
                           <input name="genero" class="custom-checkbox" value="Otro" type="checkbox">
                           <span><label class="label1" for="">Otro</label></span>
                       </label>
                    {{-- @error('genero')
                            <br>
                                <small class="text-danger">{{$message}}</small>
                            <br>
                    @enderror --}}
                  </div>
                  <div class="form-group m-1">
                    <label for="">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="fechaNacimiento" id="name" required value="{{$registro->fechaNacimiento}}">
                    @error('fechaNacimiento')
                            <br>
                                <small class="text-danger">{{$message}}</small>
                            <br>
                    @enderror
                  </div>
                  <div>
                    <button class="btn btn-primary" type="submit">Actualizar información</button>
                </div>
                </div>
    

            
    
        </div>

    
</form>


    <footer class="footer-perfil-perfil">MIS PRIMEROS AUXILITOS</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/checkCheckBox.js')}}"></script>

</body>
</html>