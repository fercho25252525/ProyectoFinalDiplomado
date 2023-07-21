<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link rel="shortcut icon" href="../img/medalla.png">
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
            include "../config/conexion.php";
        ?>
        <form class="custom-form mt-5" method="post">
            <h1>Registrarse</h1>
            <?php
                include "../controlador/registrar_usuario.php";
            ?>
            <input type="text" name="Usuario" placeholder="Usuario" required="required" />
            <input type="number" name="documento" placeholder="Número documento" required="required" />
            <input type="text" name="Nombres" placeholder="Nombres" required="required" />
            <input type="text" name="Apellidos" placeholder="Apellidos" required="required" />
            <input type="email" name="email" placeholder="Correo" required="required" />
            <input type="password" name="password" placeholder="Contraseña" required="required" />
            <button type="submit" class="p-button-success" name="btnregistrar" value="ok"><a class="text-white a"
                    >Registrarse</a></button>
        </form>
    </header>


    <script src="https://kit.fontawesome.com/55a30c2dc8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>