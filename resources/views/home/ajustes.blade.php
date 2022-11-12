<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJUSTES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/menu/settings2.png')}}" type="image/x-icon">
</head>
<body class="body-ajustes">
    <img src="{{asset('img/jhon.png.jpg')}}" alt=""  width="1920"  height="1080">
    <div class="container-perfil-padre">

        <div  class="perfil" class="container-perfil-hijo">
            <a  img class id="enlace" href="{{route('auth.edit', auth()->user()->id)}}">  <img src="{{asset('img/person-circle.svg')}}" width="40px">  Perfil</a>
        </div>
        
        <div class="container-perfil-hijo">
            <a class="desactivar"   id="enlace-btn" class="btn-desactivar-sonido"> <img src="{{asset('img/speaker.svg')}}" width="40px"> Desactivar sonido</a>
        </div>
        <div class="container-perfil-hijo">
            <a class="ayuda" id="enlace" href=""> <img src="{{asset('img/info-circle.svg')}}" width="40px">  Ayuda</a>
        </div>
        <div class="">
            <a   class="sesion" href="{{route('logout')}}"> <img src="{{asset('img/rocket-takeoff-fill.svg')}}" width="40px">  Cerrar sesion</a>
            
        </div>

        <div class="version">
            <p id="version-app">Version 1.0</p>
        </div>
        <img  class="img1" src="{{asset('img/imgs/doctor-auxilitos.png')}}">
        <img  class="img2"src="{{asset('img/policia-removebg-preview.png')}}">
    </div> 
      
</body>
</html>