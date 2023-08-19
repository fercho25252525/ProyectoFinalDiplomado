<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="shortcut icon" href="../img/medalla.png">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/cargando.css">
    <link rel="stylesheet" type="text/css" href="../css/maquinawrite.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style> 
    .bg-card {
        background-color: #495c80
    }
    .icon{
        cursor:pointer
    }
</style>

<body>
<div class="cargando">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
    <nav>
        <ul class="nav nav-tabs bg-nav d-flex bd-highlight pl-5 pr-5">
            <li class="nav-item mt-1 bd-highlight">
                <a class="nav-link text-white" aria-current="page" href="productos.php">Productos</a>
            </li>
            <li class="nav-item mt-1 bd-highlight">
            </li>
            <li class="nav-item mt-1 bd-highlight">
                <a class="nav-link text-white" href="usuario.php">Usuarios</a>
            </li>
            <li class="nav-item mt-1 bd-highlight">
                <a class="nav-link text-white" href="inventario.php">Inventario</a>
            </li>
            <li class="nav-item mt-1 ms-auto bd-highlight">
                <a class="nav-link text-white d-flex justify-content-end" href="../index.html">Cerrar sesión</a>
            </li>
        </ul>
    </nav>

    <header>
        <div class="container mt-4">
            <div class="card">
                <h5 class="card-header bg-card text-white">Gestión de usuarios</h5>
                <div class="card-body">
                <div class="d-flex bd-highlight">
                        <button class="btn btn-dark text-white ms-auto bd-highlight" data-bs-toggle="modal"
                            data-bs-target="#modalCrear"><i class="fa-solid fa-plus m-2"></i>Crear usuario</button>
                    </div>              
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mt-3 text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th scope="col">ACCIONES</th>
                                    <th scope="col">CÓDIGO</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">N° DOCUMENTO</th>
                                    <th scope="col">USUARIO</th>
                                    <th scope="col">CORREO</th>
                                    <th scope="col">ESTADO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include "../config/conexion.php";
                                $sql = $conexion->query("select * from usuarios order by codigo desc");
                                while($datos=$sql->fetch_object()){?>
                                    <tr>
                                        <td>  
                                            <a class="icon" data-toggle="modal" data-target="#editChildresn<?php echo $datos->codigo ?>"><i
                                                    class="fa-solid fa-pen-to-square text-warning"></i></a>
                                            <a class="icon" data-toggle="modal" data-target="#deleteChildresn<?php echo $datos->codigo ?>"><i
                                                    class="fa-solid fa-trash text-danger"></i></a>
                                        </td>
                                        <td><?= $datos->codigo ?></td>
                                        <td><?= $datos->nombre ?> <?= $datos->apellido ?></td>
                                        <td><?= $datos->num_documento ?></td>
                                        <td><?= $datos->usuario ?></td>
                                        <td><?= $datos->correo ?></td>
                                        <td><?= $datos->estado ?></td>
                                    </tr>
                                    <?php include('modal/ModalEditarUsuario.php'); ?>
                                    <?php include('modal/ModalEliminarUsuario.php'); ?>
                                <?php
                                     }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

    <!-- Modal crear-->
    <div class="modal fade" id="modalCrear" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
               
                <div class="modal-header bg-card">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Crear usuario</h1>
                </div>
                <?php
                    include "../controlador/registrar_usuario.php";
                ?> 
                <form class="custom-form" method="POST">
                 
                    <div class="modal-body row">
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                            <input type="text" name="Usuario" class="form-control" id="exampleFormControlInput1" required="required" placeholder="Usuario">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">N° Documento</label>
                            <input type="number" name="documento" class="form-control" id="exampleFormControlInput1" required="required"
                                placeholder="Documento usuario">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" name="Nombres" class="form-control" id="exampleFormControlInput1" required="required"
                                placeholder="Nombre usuario">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                            <input type="text" name="Apellidos" class="form-control" id="exampleFormControlInput1" required="required"
                                placeholder="Apellido usuario">
                        </div>
                        
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Correo</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" required="required"
                                placeholder="Correo usuario">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                            <input type="password" name="password" class="form-control" id="exampleFormControlInput1" required="required"
                                placeholder="Contraseña usuario">
                        </div>                   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal confirmacion-->
    <div class="modal fade" id="modalConfirmacion" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-card">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Eliminación usuario</h1>
                </div>
                <h5 class="text-center mt-4">Se ha eliminado el usuario correctamente.</h5>
                <i class="fa-regular fa-circle-check text-success text-center fa-5x mt-2"></i>
                <div class="modal-footer mt-4 justify-content-center">
                    <button type="button" class="btn btn-dark" data-bs-toggle="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/55a30c2dc8.js" crossorigin="anonymous"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

    //Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 5000);

    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id =  $(this).attr("id");
        var dataString = 'id='+ id;
        url = "../controlador/eliminar_usuario.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="usuario.php";
                  $('#respuesta').html(data);
                }
            });
        return false;
    });
});
</script>

</html>