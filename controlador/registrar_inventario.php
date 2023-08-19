<?php
    include "../config/conexion.php";
    if(!empty($_POST["btnregistrar"])){
        if(!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["total"]) and 
            !empty($_POST["maxima"]) and !empty($_POST["minima"])){

            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $total = $_POST["total"];
            $maxima = $_POST["maxima"];
            $minima = $_POST["minima"];
            $comentario = $_POST["comentario"];

            $targetDir = "../images_product/";
            $imageName = $_POST["image_name"]; 
            $targetFile = $targetDir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if ($uploadOk == 0) {
                echo "El archivo no se subió.";
            } else {
                $targetFileWithCustomName = !empty($imageName) ? $targetDir . $imageName . "." . $imageFileType : $targetDir . $_FILES["image"]["name"];
                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFileWithCustomName); 
            }
            
            $sql = $conexion->query("INSERT INTO inventario(nombre, precio, url_producto, cantidad_total, cantidad_maxima, cantidad_minima, detalle)
                                    values ('$nombre', $precio, '$targetFileWithCustomName', $total, $maxima, $minima, '$comentario')");
            header("refresh:1.5; url=../vistas/productos.html");  
            if($sql == 1){
                echo "<script type='text/javascript'>
                        window.location='../vistas/inventario.php';
                    </script>";      
            }else{
                echo '<div class="alert alert-danger"> Error al registrar persona</div>';
            }
        }else{
            echo '<div class="alert alert-danger"> Alguno de los campos esta vacio</div>';
        }
    }
?>