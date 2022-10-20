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

    
    <form action="/register" method="POST" id="formulario">

        {{--Input oculto--}}
        @csrf

        <div class="form">
            <h1 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h1>
            <h1 id="tituloRegistro">Registro</h1>
            <div class="grupo">

                <input class="input" type="text" name="name" id="name" required><span class="barra"></span>
                <label  class="label" for="">Nombre</label>
            </div>
            <div class="grupo">
                <input class="input" type="email" name="email" id="name" required><span class="barra"></span>
                <label class="label" for="">Correo</label>
            </div>
            <div class="grupo">
                <input class="input" type="text" name="genero" id="name" required><span class="barra"></span>
                <label class="label" for="">Genero</label>
            </div>
            <div class="grupo">
                <input class="input" type="date" name="fechaNacimiento" id="name" required><span class="barra"></span>
                <label class="label" for="">Fecha de nacimiento</label>
            </div>
            <div class="grupo">
                <input class="input" type="password" name="password" id="name" required><span class="barra"></span>
                <label class="label" for="">Contraseña</label>
            </div>

            <div class="grupo">
                <input class="input" type="password" name="password_confirmation" id="name" required><span class="barra"></span>
                <label class="label" for="">Confirmar contraseña</label>
            </div> 

            <button type="submit" id="btn_Registrar">Registrarse</button>
            <button type="submit" id="btn_Regresar" onclick="location.href=''">Regresar</button>    


        </div>

    
        


    </form>

    
   
    
    
</body>
</html>