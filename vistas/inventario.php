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
    <link rel="stylesheet" type="text/css" href="../css/inventario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>


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
                <h5 class="card-header bg-card text-white">Gestión de inventario</h5>
                <div class="card-body">
                    <div class="d-flex bd-highlight">
                        <button class="btn btn-dark text-white ms-auto bd-highlight" data-bs-toggle="modal"
                            data-bs-target="#modalCrear"><i class="fa-solid fa-plus m-2"></i>Agregar productoo</button>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover mt-3 text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th scope="col">ACCIONES</th>
                                    <th scope="col">CÓDIGO</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">PRECIO</th>
                                    <th scope="col">PRODUCTO</th>
                                    <th scope="col">CANTIDAD TOTAL</th>
                                    <th scope="col">CANTIDAD MÁXIMA</th>
                                    <th scope="col">CANTIDAD MÍNIMA</th>
                                    <th scope="col">DETALLE</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                include "../config/conexion.php";
                                $sql = $conexion->query("select * from inventario");
                                while($datos=$sql->fetch_object()){?>
                                <tr>
                                    <td>
                                    <a class="icon" data-toggle="modal" data-target="#editChildresn<?php echo $datos->id ?>"><i
                                                    class="fa-solid fa-pen-to-square text-warning"></i></a>
                                    <a class="icon" data-toggle="modal" data-target="#deleteChildresn<?php echo $datos->id ?>"><i
                                            class="fa-solid fa-trash text-danger"></i></a>
                                    </td>
                                    <td><?= $datos->id ?></td>
                                    <td><?= $datos->nombre ?></td>
                                    <td>1<?= $datos->precio ?></td>
                                    <td><img src="<?= $datos->url_producto == '../images_product/' ? '../images_product/notFound.png' : $datos->url_producto ?>" alt="<?= $datos->nombre ?>" width="70px" height="50px"></td>
                                    <td><?= $datos->cantidad_total ?></td>
                                    <td><?= $datos->cantidad_maxima ?></td>
                                    <td><?= $datos->cantidad_minima ?></td>
                                    <td><?= $datos->detalle ?></td>
                                </tr>
                                <?php include('modal/modalEditarInventario.php'); ?>
                                <?php include('modal/ModalEliminarInventario.php'); ?>
                            <?php
                                }
                            ?>
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
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Crear producto</h1>
                </div>
                <?php
                    include "../config/conexion.php";
                ?> 
                <form action="../controlador/registrar_inventario.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body row">
                        <div class="col-md-6 col-sm-12  mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" required="required"
                                placeholder="Nombre producto">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Precio</label>
                            <input type="number" class="form-control" name="precio" id="exampleFormControlInput1" required="required"
                                placeholder="Precio producto">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Cantidad total</label>
                            <input type="number" class="form-control" name="total" id="exampleFormControlInput1" required="required"
                                placeholder="Cantidad total del producto">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Cantidad máxima</label>
                            <input type="number" class="form-control" name="maxima" id="exampleFormControlInput1" required="required"
                                placeholder="Cantidad máxima del producto">
                        </div>
                        <div class="col-md-6 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">Cantidad mínima</label>
                            <input type="number" class="form-control" name="minima" id="exampleFormControlInput1" required="required"
                                placeholder="Cantidad mínima del producto">
                        </div>                        

                        <div class="col-md-12 col-sm-12 mt-3">
                            <label for="exampleFormControlInput1" class="form-label">comentario</label>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Comentario" name="comentario" id="floatingTextarea"></textarea>
                            </div>
                        </div>
                    </div>                    
                    <label for="image" class="custom-file-upload">Seleccionar Imagen</label>
                    <input type="file" name="image" id="image">
                    <label for="image_name">Nombre de la imagen:</label>
                    <div>
                        <input type="text" class="form-control" name="image_name" id="image_name">
                    </div>                     

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-dark" name="btnregistrar" value="ok">Crear</button>
                    </div>                    
                </form>
            </div>
        </div>
    </div>

    <!-- Modal actualizar-->
    <div class="modal fade" id="modalActualizar" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-card">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Actualizar producto</h1>
                </div>
                <div class="modal-body row">
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Código</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Código producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Nombre producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Precio</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Precio producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Producto</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="imagen del producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Cantidad total</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Cantidad total del producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Cantidad máxima</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Cantidad máxima del producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">Cantidad mínima</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Cantidad mínima del producto">
                    </div>
                    <div class="col-md-6 col-sm-12 mt-3">
                        <label for="exampleFormControlInput1" class="form-label">comentario</label>
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Comentario" id="floatingTextarea"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-dark">Actualizar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal confirmacion-->
    <div class="modal fade" id="modalConfirmacion" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-card">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Eliminación producto</h1>
                </div>
                <h5 class="text-center mt-4">Se ha eliminado el producto correctamente.</h5>
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
        url = "../controlador/eliminar_inventario.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="inventario.php";
                  $('#respuesta').html(data);
                }
            });
        return false;
    });
});
</script>

</html>