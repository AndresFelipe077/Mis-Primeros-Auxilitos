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

    
    <form action="{{route('registro.store')}}" method="POST" id="formulario">

        {{--Input oculto--}}
        @csrf

        <div class="form">
            <h1 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h1>
            <h1 id="tituloRegistro">Registro</h1>
            <div class="grupo">
                <input class="input" type="text" name="nombre" id="name" required><span class="barra"></span>
                <label  class="label" for="">Nombre</label>
            </div>
            <div class="grupo">
                <input class="input" type="email" name="correo" id="name" required><span class="barra"></span>
                <label class="label" for="">Correo</label>
            </div>

            <div class="grupo">
                <h4 class="label-genero">Escoge tu genero: </h4>
                <label>
                    <input name="genero" class="custom-checkbox" value="Masculino" type="checkbox">
                    <span><label class="label1" for="">Masculino</label></span>
                </label>
                <label>
                    <input name="genero" class="custom-checkbox" value="Femenino" type="checkbox">
                    <span>Femenino</span>
                </label>
                <label>
                    <input name="genero" class="custom-checkbox" value="Otro" type="checkbox">
                    <span>Otro</span>
                </label>
            </div>

            
            <div class="grupo">
                <input class="input" type="date" name="fechaNacimiento" id="name" required><span class="barra"></span>
                <label class="label" for="">Fecha de nacimiento</label>
            </div>
            <div class="grupo">
                <input class="input" type="password" name="contrasena" id="name" required><span class="barra"></span>
                <label class="label" for="">Contraseña</label>
            </div>
            <div class="grupo">
                <input class="input" type="password" name="confirmarContrasena" id="name" required><span class="barra"></span>
                <label class="label" for="">Confirmar contraseña</label>
            </div>

            <button type="submit" id="btn_Registrar">Registrarse</button>
            <button type="submit" id="btn_Regresar" onclick="location.href='{{route('registro.index')}}'">Regresar</button>    


        </div>

    
        


    </form>

    
   
    <script src="{{asset('js/checkCheckBox.js')}}"></script>
    
</body>
</html>