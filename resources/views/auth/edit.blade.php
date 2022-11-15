<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PERFIL</title>
    <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    
    <!-- cdn icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    
</head>
<body class="body-perfil"> 

    {{-- <a id="a-regresar-perfil" href="{{route('home.index')}}">regresar</a>

    <form class="form1" action="" method="POST">

    <div class="container-padre1">

        <div class="container-hijo-1">
            <label id="label-name" for="">PERFIL</label>
        </div>

        <div class="container-hijo-1">
            <img type="file" name="file" class="rounded-circle" src="{{asset($registro->avatar)}}" width="400px" accept="image/*">
        </div>
        

        <div class="container-hijo1">
            <label for="" id="label-name">{{$registro->name}}</label>
        </div>
          
        
    </div>

   

    <!--Inicio-->
    <div class="container-padre"> <!--inicio-->
        
        <div class="container-1">
            
            <div class="container-perfil-datos">
                <label  for="">Nombre: {{$registro->name}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Correo: {{$registro->email}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Genero: {{$registro->genero}}</label>
            </div>
            <div class="container-perfil-datos">
                <label for="">Fecha de nacimiento: {{$registro->fechaNacimiento}}</label>
            </div>
            <div class="container-perfil-datos">
                <button type="submit" class="btn-cambiar-contrasena-perfil"> Cambiar contraseña </button>
            </div>

        </div>

        <div class="container-2">

            <div class="container-logros-padre">
                <div class="container-logros-perfil">
                    <label for="">Retos ganados: 10</label>
                </div>
            </div>
    
            <form method="POST" action="{{route('registro.destroy', $registro)}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" id="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar tu cuenta?')">Borrar cuenta</button>
            </form>
    
        </div>

    </div> --}}
        
    <!--Fin-->

    {{-- <form class="form1" action="{{route('edit.update', $registro)}}" method="POST" enctype="multipart/form-data">

        @csrf

        @method('put')

        <div class="container-perfil-datos-padre2">
            <div class="form">
                <h3 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h3>
                <h4 id="tituloRegistro">Registro</h4>


                <div class="card" >
                    <div class="card-title m-1">
                        <div class="form-group m-1">
                            <label for="exampleFormControlFile1" id="src-file">Escoge una imagen</label><br>
                            <input type="file" name="file" value="{{old('avatar',$registro->avatar)}}" accept="image/*">
                            {{-- @error('file') 
                                    <br>
                                        <small class="text-danger">{{$message}}</small>
                                    <br>
                            @enderror --}}
                        {{-- </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input class="form-control" type="text" name="name" id="name" required value="{{$registro->name}}"><span class="barra"></span>
                          @error('name')
                                  <br>
                                      <small class="text-danger">{{$message}}</small>
                                  <br>
                          @enderror
                      </div>
                
                  <div class="form-group m-1">
                    <label for="">Genero</label>
                    <div>
                       </div>
                       <label>
                           <input name="genero" class="custom-checkbox" value="Masculino" type="checkbox">
                           <span><label class="label1" for="">Masculino</label></span>
                           {{-- @if(Thisform.Check3.Value=1) 
                                
                                Thisform.Check3.ForeColor="(0,0,128)"
                           
                           @endif --}}
                       {{-- </label>
                       <label>
                           <input name="genero" class="custom-checkbox" value="Femenino" type="checkbox" >
                           <span><label class="label1" for="">Femenino</label></span>
                       </label>
                       <label>
                           <input name="genero" class="custom-checkbox" value="Otro" type="checkbox">
                           <span><label class="label1" for="">Otro</label></span>
                       </label> --}}
                    {{-- @error('genero')
                            <br>
                                <small class="text-danger">{{$message}}</small>
                            <br>
                    @enderror --}}
                  {{-- </div>
                  <div class="form-group m-1">
                    <label for="">Fecha de nacimiento</label>
                    <input class="form-control" type="date" name="fechaNacimiento" id="name" required value="{{$registro->fechaNacimiento}}">
                    @error('fechaNacimiento')
                            <br>
                                <small class="text-danger">{{$message}}</small>
                            <br>
                    @enderror
                  </div>
                  <div>
                    <button class="btn btn-primary" type="submit">Actualizar información</button>
                </div>
                </div> 
    

            
    
        </div>

    
</form>


    <footer class="footer-perfil-perfil">MIS PRIMEROS AUXILITOS</footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('js/checkCheckBox.js')}}"></script>
--}}

<section>
    {{--<div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div> --}}
  
      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              {{-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;"> --}}
                <img class="rounded-circle img-fluid" src="{{asset($registro->avatar)}}" style="width: 200px;" accept="image/*" alt="avatar">
              <h5 class="my-3">{{$registro->name}}</h5>
              {{-- <p class="text-muted mb-1">Full Stack Developer</p> --}}
              {{-- <p class="text-muted mb-4">Bay Area, San Francisco, CA</p> --}}
              <div class="d-flex justify-content-center mb-2">
                <!-- <button type="button" class="btn btn-primary"></button> -->
                {{-- <button type="button" class="btn btn-outline-primary ms-1">Editar perfil</button> --}}

               <p>
                    <button class="btn btn-outline-primary ms-1" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                      Editar perfil
                    </button> 
                </p>


              </div>
              <form method="POST" action="{{route('registro.destroy', $registro)}}">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit" id="a-borrar-cuenta" onclick="return confirm('¿Seguro que deseas eliminar tu cuenta?')">Borrar cuenta</button>
            </form>
            </div>

           

          </div>


          {{-- <div class="card mb-4 mb-lg-0">
            <div class="card-body p-0">
              <ul class="list-group list-group-flush rounded-3">
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fas fa-globe fa-lg text-warning"></i>
                  <p class="mb-0">https://mdbootstrap.com</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                  <p class="mb-0">@mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                  <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                  <p class="mb-0">mdbootstrap</p>
                </li>
              </ul>
            </div>
          </div> --}}
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
                  <p class="mb-1" style="font-size: 1em;">Trivias</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: 1em;">Adivinar objeto</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  {{-- <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card mb-4 mb-md-0">
                <div class="card-body">
                  <p class="mb-4"><span class="text-primary font-italic me-1">Progreso</span> Total
                  </p>
                  <p class="mb-1" style="font-size: 1em;">Trivias</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: 1em;">Adivinar objetos</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>

                  
                  {{-- <p class="mt-4 mb-1" style="font-size: .77rem;">One Page</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Mobile Template</p>
                  <div class="progress rounded" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <p class="mt-4 mb-1" style="font-size: .77rem;">Backend API</p>
                  <div class="progress rounded mb-2" style="height: 5px;">
                    <div class="progress-bar" role="progressbar" style="width: 66%" aria-valuenow="66"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
          <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form class="form1" action="{{route('edit.update', $registro)}}" method="POST" enctype="multipart/form-data">

                    @csrf
            
                    @method('put')
            
                    <div class="container-perfil-datos-padre2">
                        <div class="form">
                            <h3 id="tituloAuxilitos">MIS PRIMEROS AUXILITOS</h3>
                            <h4 id="tituloRegistro">Registro</h4>
            
            
                            <div class="card" >
                                <div class="card-title m-1">
                                    <div class="form-group m-1">
                                        <label for="exampleFormControlFile1" id="src-file">Escoge una imagen</label><br>
                                        <input type="file" name="file" value="{{old('avatar',$registro->avatar)}}" accept="image/*" required>
                                        {{-- @error('file') 
                                                <br>
                                                    <small class="text-danger">{{$message}}</small>
                                                <br>
                                        @enderror --}}
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="">Nombre</label>
                                    <input class="form-control" type="text" name="name" id="name" required value="{{$registro->name}}"><span class="barra"></span>
                                      @error('name')
                                              <br>
                                                  <small class="text-danger">{{$message}}</small>
                                              <br>
                                      @enderror
                                  </div>
                            
                              <div class="form-group m-1">
                                <label for="">Genero</label>
                                <div>
                                   </div>
                                   <label>
                                       <input name="genero" class="custom-checkbox" value="Masculino" type="checkbox">
                                       <span><label class="label1" for="">Masculino</label></span>
                                       {{-- @if(Thisform.Check3.Value=1) 
                                            
                                            Thisform.Check3.ForeColor="(0,0,128)"
                                       
                                       @endif --}}
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
                              <div class="form-group m-1">
                                <label for="">Fecha de nacimiento</label>
                                <input class="form-control" type="date" name="fechaNacimiento" id="name" required value="{{$registro->fechaNacimiento}}">
                                @error('fechaNacimiento')
                                        <br>
                                            <small class="text-danger">{{$message}}</small>
                                        <br>
                                @enderror
                              </div>
                              <div>
                                <button class="btn btn-primary" type="submit">Actualizar información</button>
                            </div>
                            
                            </div> 
                
                    </div>

                    
                
            </form>
        </div>
        
            
          </div> 
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.6.1.js"
integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
crossorigin="anonymous"></script>




</body>
</html>