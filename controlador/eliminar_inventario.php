<?php
include('../config/conexion.php');
$idRegistros = $_REQUEST['id']; 

$DeleteRegistro = ("DELETE FROM inventario WHERE id= '".$idRegistros."' ");
mysqli_query($conexion, $DeleteRegistro);
?>