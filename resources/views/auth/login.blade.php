<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link id="image-head" rel="shortcut icon" href="{{asset('img/botiquin.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
    <script type="text/javascript" src="javaScript.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    
    {{-- animations css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
    
</head>
<body class="body_Login">

    <content class="content_login">
        <h1 class="animate__animated animate__bounce" id="titulo-Auxilitos"><img id="image_Title" src="{{ asset('img/botiquin.png') }}" height="50px" width="50px"> MIS PRIMEROS AUXILITOS <img id="image_Title" src="{{ asset('img/botiquin.png') }}" height="50px" width="50px"></h1>
        {{-- <h1 ><img id="image_Title" src="{{ asset('img/botiquin.png') }}" height="50px" width="50px"> MIS PRIMEROS AUXILITOS <img id="image_Title" src="{{ asset('img/botiquin.png') }}" height="50px" width="50px"></h1> --}}

            <form action="{{route('login.post')}}" method="POST" class="form">
                
                @csrf

                <h1 id="titulo" class="animate__animated animate__swing" >Login</h1>

                @if($errors->any())
                <div class="alert alert-danger animate__animated animate__swing" role="alert">                 
                        @foreach($errors->all() as $error)
                            <strong>* {{$error}}</strong>
                        @endforeach 
                </div>                          
                @endif

                <div class="grupo">
                    <input type="email" id="correo" name="email" placeholder="Correo" required>
                </div>
                
                <div class="grupo">
                    <input type="password" id="contrasena" name="password" placeholder="Contraseña" required>
                </div>                             

                <div class="grupo">
                    <button id="btn_loguearse" class="submit">ACEPTAR</button>
                </div>

                <div class="content_password_Olvida">
                    <a id="text_password" href=""> ¿Has olvidado tu contraseña?</a>
                    
                </div>

                <div class="grupo">
                    <text>¿No tienes cuenta?</text>
                  <button id="btn_registrarse" onclick="location.href='{{route('registro')}}'">registrarse</button>  

                </div>

                <div class="grupo">
                    <img class="img-btn-Facebook" src="{{ asset('img/Facebook.svg') }}" onclick="location.href='https://www.facebook.com/'">
                    <img class="img-btn-Google" src="{{ asset('img/Google.svg') }}" onclick="location.href='https://accounts.google.com/v3/signin/identifier?dsh=S1426936774%3A1667332891017678&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession'">
                </div>

                

                <footer class="footer">

                    copyright &copy Mis Primeros Auxilitos
            
                </footer>

            </form>

        
            

    </content>
<!--Script-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>