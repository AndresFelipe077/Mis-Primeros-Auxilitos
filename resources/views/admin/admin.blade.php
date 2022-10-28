<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
    

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">
                        lista de personas
                    </div>
                    <div class="p-4">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Fecha De Nacimiento</th>
                                    <th scope="col" colspan="2">Opciones</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 
                                    foreach($user as $dato)
                                    {
                                ?>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>Andres Felipe</td>
                                            <td>felipe@gmail.com</td>
                                            <td>13-diciembre/2003</td>
                                            <td>Editar</td>
                                            <td>Eliminar</td>
                                        </tr>
                                <?php
                                    }
                                
                                ?>

                                
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Ingresar datos:
                    </div>
                    <form action="" class="p-4" method="POST">
                        <div class="mb-3">
                            <label for="" class="form-label">Nombre: </label>
                            <input type="text" class="form-control" name="" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Correo: </label>
                            <input type="text" class="form-control" name="" autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Fecha De Nacimiento: </label>
                            <input type="text" class="form-control" name="" autofocus>
                        </div>
                        <div class="d-grid">
                            <input type="hidden" name="oculto" value="1">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>