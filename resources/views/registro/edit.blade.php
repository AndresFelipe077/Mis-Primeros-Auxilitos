<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
</head>
<body class="body-perfil">

    <a id="a-regresar-perfil" href="ajustes.html">regresar</a>

    <form class="form1" action="" method="POST">

    <div class="container-padre1">

        <div class="container-hijo-1">
            <label id="label-name" for="">PERFIL</label>
        </div>

        <div class="container-hijo-1">
            <img class="imagen-perfil-perfil" src="Images/profile/smith.jpg" width="250px" height="250px">
        </div>

        <div class="container-hijo1">
            <label for="" id="label-name">{{$registro->nombre}}</label>
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
                <label  for="">Nombre: {{$registro->nombre}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Correo: {{$registro->correo}}</label>
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
                <a class="a-borrar-cuenta" href="login.html">Borrar cuenta</a>
            </div>
    
        </div>

    </div>
        
    <!--Fin-->

    <form class="form1" action="{{route('registro.update')}}" method="POST">

        @csrf

        @method('put')

        <div class="container-perfil-datos-padre2">

            <div class="container-perfil-datos">
                <input class="input-perfil-dato" type="text" value="{{$registro->nombre}}" name="nombre" id="name" required><span class="barra"></span>
                <label  for="">Nombre</label>
            </div>
            <div class="container-perfil-datos">
                <input class="input-perfil-dato" type="email" value="{{$registro->correo}}" name="correo" id="name" required><span class="barra"></span>
                <label for="">Correo</label>
            </div>
            <div class="container-perfil-datos">
                <input class="input-perfil-dato" type="text" value="{{$registro->genero}}" name="genero" id="name" required><span class="barra"></span>
                <label for="">Genero</label>
            </div>
            <div class="container-perfil-datos">
                <input class="input-perfil-dato" type="date" value="{{$registro->fechaNacimiento}}" name="fechaNacimiento" id="name" required><span class="barra"></span>
                <label for="">Fecha de nacimiento</label>
            </div>
            <div class="container-perfil-datos">
                <input class="input-perfil-dato" type="password" value="{{$registro->contrasena}}" name="contrasena" id="name" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="container-perfil-datos">
                <input class="input-perfil-dato" type="password" value="{{$registro->confirmarContrasena}}" name="confirmarContrasena" id="name" required><span class="barra"></span>
                <label for="">Confirmar contraseña</label>
            </div>

            <div>
                <button id="btn-actualizar-info-perfil" type="submit">Actualizar información</button>
            </div>
    
        </div>

    
</form>


    <footer class="footer-perfil-perfil">MIS PRIMEROS AUXILITOS</footer>
    
    
</body>
</html>