<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJUSTES</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/menu/settings2.png')}}" type="image/x-icon">
</head>
<body class="body-ajustes">

    {{auth()->user()->id}}

    <div class="container-perfil-padre">

        <div class="container-perfil-hijo">
            <a id="enlace" href="{{route('auth.edit', $registro->id)}}">Perfil</a>
        </div>
        
        <div class="container-perfil-hijo">
            <button id="enlace-btn" class="btn-desactivar-sonido">Desactivar sonido</button>
        </div>
        <div class="container-perfil-hijo">
            <a id="enlace" href="">Ayuda</a>
        </div>
        <div class="container-perfil-hijo">
            <a id="enlace" href="{{route('logout')}}">Cerrar sesion</a>
        </div>

        <div>
            <p id="version-app">Version 1.0</p>
        </div>

    </div>
      
</body>
</html>