<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    
    <!-- cdn icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    {{-- animations css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"> 
    

</head>
<body class="body-registro">
    
    <form action="/register" method="POST" id="formulario" class="animate__animated animate__jackInTheBox">

        {{--Input oculto--}}
        @csrf

        <div class="form">
            <h1 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h1>
            <h1 id="tituloRegistro">Registro</h1>

            @if($errors->any())
                <div class="alert alert-danger" role="alert">                 
                        @foreach($errors->all() as $error)
                        <ul>
                            <strong>* {{$error}}</strong>
                        </ul>
                            
                        @endforeach              
                </div>                          
            @endif

            <div class="grupo">
                <input class="input" type="text" name="name" id="name" required value="{{old('name')}}"><span class="barra"></span>
                <label  class="label" for="">Nombre</label>
            </div>
            <div class="grupo">
                <input class="input" type="email" name="email" id="name" required value="{{old('email')}}"><span class="barra"></span>
                <label class="label" for="">Correo</label>
            </div>
            <div class="grupo">
                <h4 class="text-primary">Escoge tu genero </h4>
                <label>
                    <input name="genero" class="text-primary" value="Masculino" type="checkbox">
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
                <input class="input" type="date" name="fechaNacimiento" id="name" required value="{{old('fechaNacimiento')}}"><span class="barra"></span>
                <label class="label" for="">Fecha de nacimiento</label>
            </div>
            <div class="grupo">
                <input class="input" type="password" name="password" id="name" required><span class="barra"></span>
                <label class="label" for="">Contraseña</label>
                @if($errors->any('password'))
                    <div class="text-danger" role="alert">       
                        <p>La constraseña debe coincidir</p>
                    </div>
                @endif
            </div>

            <div class="grupo">
                <input class="input" type="password" name="password_confirmation" id="name" required><span class="barra"></span>
                <label class="label" for="">Confirmar contraseña</label>
                @if($errors->any('password'))
                    <div class="text-danger" role="alert">       
                        <p>La constraseña debe coincidir</p>
                    </div>
                @endif
            </div>

            <div class="grupo">
                <div class="form-check text-primary">
                    <input type="checkbox" name="terms-conditions" class="form-check-input text-info animate__animated animate__rotateIn" id="_vanishIn" required>
                    <label class="form-check-label" for="exampleCheck1">Acepto las <strong><a href="#">Condiciones del servicio</a></strong> y la 
                        <strong><a href="#">Politica de privacidad</a></strong></label>
                </div>
            </div>
            

            <button type="submit" id="btn_Registrar">Registrarse</button>
            <button type="submit" id="btn_Regresar" onclick="location.href='{{route('login')}}'">Regresar</button>    


            


        </div>

    </form>

    
    <script src="{{asset('js/checkCheckBox.js')}}"></script>
    
    
</body>
</html>