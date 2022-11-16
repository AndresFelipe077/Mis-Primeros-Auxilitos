<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="shortcut icon" href="{{asset('img/profile/profile2.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
</head>
<body class="body-perfil"> 

<section>
      <div class="row mt-5">       
        <div class="col-lg-4">
          <div class="card mb-4">
            <a class="btn btn-success" href="{{route('home.index')}}">regresar</a>
            <div class="card-body text-center">
              <img class="rounded-circle img-fluid" src="{{asset($registro->avatar)}}" id="img" accept="image/*" alt="avatar">
              <h5 class="my-3">{{$registro->name}}</h5>
              <div class="d-flex justify-content-center mb-2">
                <p>
                  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Editar perfil
                  </button>
                </p>
              </div>
                <form method="POST" action="{{route('registro.destroy', $registro)}}">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger " type="submit" id="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar tu cuenta?')">Borrar cuenta</button>
                </form>               
                <a class="btn btn-outline-danger mt-3" href="{{route('logout')}}" onclick="return confirm('¿Seguro que deseas cerrar sesión?')"><img src="{{asset('img/profile/salida.png')}}" alt="" width="40px" height="40px"></a>
              </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <h4 class="card card-title">Descripción</h4>
            <div class="card-body p-0">
              <p class="mb-0">...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card mb-4">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Nombre: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$registro->name}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Correo: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$registro->email}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Genero: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$registro->genero}}</p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-sm-3">
                  <p class="mb-0">Fecha de nacimiento: </p>
                </div>
                <div class="col-sm-9">
                  <p class="text-muted mb-0">{{$registro->fechaNacimiento}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Juegos</span> Retos ganados: 10
                  </p>
                  <p class="mb-1" id="juegos">Trivias</p>
                  <div class="progress rounded" id="progreso-Padre">
                    <div class="progress-bar" role="progressbar" id="progressBar" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" id="juegos">Adivinar objeto</p>
                  <div class="progress rounded" id="progreso-Padre">
                    <div class="progress-bar" role="progressbar" id="progressBar" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Progreso</span> Total
                  </p>
                  <p class="mb-1" id="juegos">Trivias</p>
                  <div class="progress rounded" id="progreso-Padre">
                    <div class="progress-bar" role="progressbar" id="progressBar" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" id="juegos">Adivinar objetos</p>
                  <div class="progress rounded" id="progreso-Padre">
                    <div class="progress-bar" role="progressbar" id="progressBar" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="collapse" id="collapseExample">
            <div class="card card-body mt-3">
              <form class="form1 card" action="{{route('edit.update', $registro)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                  <div class="text-center shadow">
                      <h3 id="tituloAuxilitos" class="text-center">MIS PRIMEROS AUXILITOS</h3>
                      <h4 id="tituloRegistro" class="text-center">Registro</h4>
                      <div class="card h5" >
                          <div class="card-title m-1">
                              <div class="form-group m-1 ">
                                  <label for="exampleFormControlFile1" id="src-file" class="text-primary">Escoge una imagen</label><br>
                                  <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" value="{{old('avatar',$registro->avatar)}}" accept="image/*" required>
                                  {{-- @error('file') 
                                          <br>
                                              <small class="text-danger">{{$message}}</small>
                                          <br>
                                  @enderror --}}                              
                              </div>
                              <br>
                          </div>
                          <div class="form-group">
                              <label for="" class="text-primary">Nombre</label>
                              <input class="form-control text-center" type="text" name="name" id="name" required value="{{$registro->name}}"><span class="barra"></span>
                                {{-- @error('name')
                                        <br>
                                            <small class="text-danger">{{$message}}</small>
                                        <br>
                                @enderror --}}
                            </div> 
                            <br>                    
                        <div class="form-group m-1">
                          <label for="" class="text-primary">Genero</label>
                          <div>
                              </div>
                              <label>
                                  <input name="genero" class="custom-checkbox" value="Masculino" type="checkbox">
                                  <span><label class="label1" for="">Masculino</label></span>
                              </label>
                              <label>
                                  <input name="genero" class="custom-checkbox" value="Femenino" type="checkbox" >
                                  <span><label class="label1" for="">Femenino</label></span>
                              </label>
                              <label>
                                  <input name="genero" class="custom-checkbox" value="Otro" type="checkbox">
                                  <span><label class="label1" for="">Otro</label></span>
                              </label>
                          {{-- @error('genero')
                                  <br>
                                      <small class="text-danger">{{$message}}</small>
                                  <br>
                          @enderror --}}
                        </div>
                        <br>
                        <div class="form-group m-1">
                          <label for="" class="text-primary">Fecha de nacimiento</label>
                          <br>
                          {{-- <input class="form-control text-center" type="date" name="fechaNacimiento" id="name" required value="{{$registro->fechaNacimiento}}"> --}}
                          <input type="date" class="Calendar" name="fechaNacimiento" id="name" value="{{$registro->fechaNacimiento}}"><span class="barra"></span>
                          <img class="img-calendar" src="{{asset('img/registro/iconCalendary.png')}}" width="20px" height="20px">                               
                          {{-- @error('fechaNacimiento')
                                  <br>
                                      <small class="text-danger">{{$message}}</small>
                                  <br>
                          @enderror --}}
                        </div>
                        <br>
                        <div>
                          <button class="btn btn-primary" type="submit">Actualizar información</button>
                        </div>
                        <br>
                        <p>
                          <button class="btn btn-outline-danger" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            Cerrar
                          </button>
                        </p>  
                  </div> 
                </div>
              </form>
            </div>  
          </div> 
        </div>
      </div>
    </div>
</section>

<script src="{{asset('js/checkCheckBox.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>