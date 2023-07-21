<?php
include('../config/conexion.php');
$idRegistros = $_REQUEST['id']; 

$DeleteRegistro = ("DELETE FROM usuarios WHERE codigo= '".$idRegistros."' ");
mysqli_query($conexion, $DeleteRegistro);
?>