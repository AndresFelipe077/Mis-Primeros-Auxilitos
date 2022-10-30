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
</head>
<body class="body_Login">

    <content class="content_login">
        <h1 id="titulo-Auxilitos"><img id="image_Title" src="{{ asset('img/botiquin.png') }}" height="50px" width="50px"> MIS PRIMEROS AUXILITOS <img id="image_Title" src="{{ asset('img/botiquin.png') }}" height="50px" width="50px"></h1>
            
            <form action="{{route('login.post')}}" method="POST" class="form">

                @csrf

                <h1 id="titulo">Login</h1>
                <div class="grupo">
                    <input type="email" id="correo" name="email" placeholder="Correo" required>
                </div>
                <div class="grupo">
                    <input type="password" id="contrasena" name="password" placeholder="Contraseña" required></input>
                </div>              

                <div class="grupo">
                    <button id="btn_loguearse" class="submit" onclick="location.href=''">ACEPTAR</button>
                </div>

                <div class="content_password_Olvida">
                    <a id="text_password" href=""> ¿Has olvidado tu contraseña?</a>
                    
                </div>

                <div class="grupo">
                    <text>¿No tienes cuenta?</text>
                  <button id="btn_registrarse" onclick="location.href='{{route('registro')}}'">registrarse</button>  

                </div>

                <div class="grupo">
                    <img class="img-btn-Facebook" src="{{ asset('img/Facebook.svg') }}" onclick="location.href='{{route('login.facebook')}}'">
                    <img class="img-btn-Google" src="{{ asset('img/Google.svg') }}" onclick="location.href='{{route('login.google')}}'">
                </div>

                

                <footer class="footer">

                    copyright &copy SENIORS_SENA;
            
                </footer>

            </form>

        
            

    </content>

</body>
</html>