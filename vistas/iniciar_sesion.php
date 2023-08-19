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

<style> 
    .bg-card {
        background-color: #7a91bb
    }
</style>

<body>
    <header>
        <div class="margin">
            
            <form class="custom-form" method="POST">
                <h1>Login</h1>
                <input type="text" name="Usuario" placeholder="Usuario" required="required" />
                <input type="password" name="password" placeholder="Contraseña" required="required" />
                <button type="submit" name="btniniciar" label="Ingresar" class="p-button-success bg-card" value="ok">Ingresar</button>
                <?php
                include "../config/conexion.php";
                include "../controlador/iniciar_sesion.php";
            ?>
            </form>
            
            <div align="center" class="mt-4">
                <button type="button" label="Registrarse" class="exter bg-card text-white"> <a class="text-white a"
                        href="registro.php">Registrarse</a></button>
            </div>
        </div>
    </header>

    <script src="https://kit.fontawesome.com/55a30c2dc8.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>s