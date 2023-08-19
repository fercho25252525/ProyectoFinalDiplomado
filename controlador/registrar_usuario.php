<?php
    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["Usuario"]) and !empty($_POST["documento"]) and !empty($_POST["Nombres"]) and !empty($_POST["Apellidos"]) and 
            !empty($_POST["email"]) and !empty($_POST["password"])){
            $usuario = $_POST["Usuario"];
            $documento = $_POST["documento"];
            $nombres = $_POST["Nombres"];
            $apellidos = $_POST["Apellidos"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $sql = $conexion->query("INSERT INTO usuarios (nombre, apellido, num_documento, usuario, correo, contrasena, estado) 
                                    values ('$nombres', '$apellidos', '$documento', '$usuario', '$email', '$password', 'Activo')");
           header("refresh:1.5; url=../vistas/productos.html");  
            if($sql == 1){
                echo "<script type='text/javascript'>
                        window.location='../vistas/usuario.php';
                    </script>";      
            }else{
                echo '<div class="alert alert-danger"> Error al registrar persona</div>';
            }
        }else{
            echo '<div class="alert alert-danger"> Alguno de los campos esta vacio</div>';
        }
    }
?>