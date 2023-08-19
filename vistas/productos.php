<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="shortcut icon" href="../img/medalla.png">
    <link rel="stylesheet" type="text/css" href="../css/cargando.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .bg-card {
        background-color: #495c80
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

    <header class="container mt-4">
        <div class="card">
            <h5 class="card-header bg-card text-white">Productos</h5>
            <div class="card-body row">
            <?php
                include "../config/conexion.php";
                $sql = $conexion->query("select * from inventario");
                while($datos=$sql->fetch_object()){?>
                <div class="card col-md-3 p-1 mt-2 text-center">
                    <img <img src="<?= $datos->url_producto == '../images_product/' ? '../images_product/notFound.png' : $datos->url_producto ?>" alt="<?= $datos->nombre ?>" width="70px" height="270px" class="card-img-top" alt="...">
                    <div class="card-body justify-content-center">
                        <h5 class="card-title"><?= $datos->nombre ?></h5>
                        <p class="card-text"><?= $datos->detalle ?></p>
                        <div class=" justify-content-center">
                            <a class="icon btn btn-dark" data-toggle="modal" data-target="#editChildresn<?php echo $datos->id ?>">Más</a>
                        </div>
                    </div>
                </div>    
                <?php include('modal/modalViewProducto.php'); ?>
                <?php
                    }
                ?>            
            </div>
        </div>
    </header>
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
});
</script>

</html>