<?php
    if(!empty($_POST["btniniciar"])){
        if(!empty($_POST["Usuario"]) and !empty($_POST["password"])){

            $username = $_POST['Usuario'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM usuarios WHERE usuario='$username' AND contrasena='$password'";
            $result = $conexion->query($sql);

            if ($result->num_rows == 1) {
                session_start();
                $_SESSION['username'] = $username;
                header("Location: ../vistas/usuario.php"); 
            } else {
                echo '<div class="alert alert-danger mt-2">Nombre de usuario o contraseña incorrectos.</div>';
            }
             
            }
    }
?>