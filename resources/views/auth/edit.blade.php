<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="body-perfil">

    <a id="a-regresar-perfil" href="{{route('home.index')}}">regresar</a>

    <form class="form1" action="" method="POST">

    <div class="container-padre1">

        <div class="container-hijo-1">
            <label id="label-name" for="">PERFIL</label>
        </div>

        <div class="container-hijo-1">
            <img class="imagen-perfil-perfil" src="Images/profile/smith.jpg" width="250px" height="250px">
        </div>

        <div class="container-hijo1">
            <label for="" id="label-name">{{$registro->name}}</label>
        </div>

        <div class="container-hijo-1">

            <button type="submit" id="btn-cambiar-imagen-perfil">
                Cambiar imagen
            </button>
              
        </div>
        
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
    
            <div>
                <a class="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar tu cuenta?')" href="{{route('delete')}}">Borrar cuenta</a>
            </div>
    
        </div>

    </div>
        
    <!--Fin-->

    <form class="form1" action="{{route('edit.update', $registro)}}" method="POST">

        @csrf

        @method('put')

        <div class="container-perfil-datos-padre2">
            <div class="form">
                <h1 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h1>
                <h1 id="tituloRegistro">Registro</h1>
                <div class="grupo">
                    <input class="input" type="text" name="name" id="name" required value="{{$registro->name}}"><span class="barra"></span>
                    <label  class="label" for="">Nombre</label>
                </div>
    
                <div class="grupo">
                    <div>
                     <span class="label-genero-edit">Genero</span>   
                    </div>
                    
                    <label>
                        <input name="genero" class="custom-checkbox" value="Masculino" type="checkbox">
                        <span><label class="label1" for="">Masculino</label></span>
                    </label>
                    <label>
                        <input name="genero" class="custom-checkbox" value="Femenino" type="checkbox" >
                        <span><label class="label1" for="">Femenino</label></span>
                    </label>
                    <label>
                        <input name="genero" class="custom-checkbox" value="Otro" type="checkbox">
                        <span><label class="label1" for="">Otro</label></span>
                    </label>
                </div>
    
                
                <div class="grupo">
                    <input class="input" type="date" name="fechaNacimiento" id="name" required value="{{$registro->fechaNacimiento}}"><span class="barra"></span>
                    <label class="label" for="">Fecha de nacimiento</label>
                </div>

    

            <div>
                <button id="btn-actualizar-info-perfil" type="submit">Actualizar información</button>
            </div>
    
        </div>

    
</form>


    <footer class="footer-perfil-perfil">MIS PRIMEROS AUXILITOS</footer>
    
    <script src="{{asset('js/checkCheckBox.js')}}"></script>

</body>
</html>