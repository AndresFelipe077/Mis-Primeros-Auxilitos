<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body class="body-registro">


    <form action="" method="POST" id="formulario">

        <div class="form">
            <h1 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h1>
            <h1 id="tituloRegistro">Registro</h1>
            <div class="grupo">
                <input type="text" name="" id="name" required><span class="barra"></span>
                <label for="">Nombre</label>
            </div>
            <div class="grupo">
                <input type="email" name="" id="name" required><span class="barra"></span>
                <label for="">Correo</label>
            </div>
            <div class="grupo">
                <input type="text" name="" id="name" required><span class="barra"></span>
                <label for="">Genero</label>
            </div>
            <div class="grupo">
                <input type="date" name="" id="name" required><span class="barra"></span>
                <label for="">Fecha de nacimiento</label>
            </div>
            <div class="grupo">
                <input type="password" name="" id="name" required><span class="barra"></span>
                <label for="">Contraseña</label>
            </div>
            <div class="grupo">
                <input type="password" name="" id="name" required><span class="barra"></span>
                <label for="">Confirmar contraseña</label>
            </div>

            <button type="submit" id="btn_Registrar" class="submit">Registrarse</button>
            <button type="submit" id="btn_Regresar" onclick="location.href=''">Regresar</button>    


        </div>

    
        


    </form>

    
   
    
    
</body>
</html>