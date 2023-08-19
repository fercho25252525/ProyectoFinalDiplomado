<?php
include('../config/conexion.php');
$codigo    = $_REQUEST['codigo'];
$usuario   = $_REQUEST['usuario'];
$nombre    = $_REQUEST['nombre'];
$apellido  = $_REQUEST['apellido'];
$documento = $_REQUEST['documento'];
$correo    = $_REQUEST['correo'];
$estado    = $_REQUEST['estado'];

$update = ("UPDATE usuarios 
	SET 
	nombre ='$nombre', apellido ='$apellido', num_documento ='$documento', usuario ='$usuario', correo = '$correo', estado = '$estado' 
    WHERE codigo = $codigo");
$result_update = mysqli_query($conexion, $update);

echo "<script type='text/javascript'>
        window.location='../vistas/inventario.php';
    </script>";

?>
