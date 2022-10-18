<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body class="body_recuperar_contrasena">

    <div class="content1">
        
        <form action="" method="post" class="form_recuperar_contrasena">
            <h1>MIS PRIMEROS AUXILITOS</h1>
            <h3>RECUPERAR CONTRASEÑA</h3>

            <div class="grupo">
                <input id="correo_Recuperar_contrasena" type="email" required placeholder="Correo">
            </div>
            <div class="grupo">
            <button id="btn_recibirCodigo" class="submit">Recibir codigo</button>   
            </div>

            <div class="grupo"> 
                <button id="btn_regresarALogin" onclick="location.href='login.html'">Regresar</button>
            </div>

        </form>

    </div>

    
</body>
</html>