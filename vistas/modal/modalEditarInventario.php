
<style>
    .bg-card {
        background-color: #495c80
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
    }

    /* Estilos para el botón de carga */
    input[type="file"] {
        display: none; /* Oculta el campo de carga de archivos */
    }

    .custom-file-upload {
        display: inline-block;
        padding: 10px 20px;
        cursor: pointer;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .custom-file-upload:hover {
        background-color: #45a049;
    }

</style>
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo  $datos->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-card">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
      </div>
        <form method="POST" action="../controlador/actualizar_inventario.php">
            <div class="modal-body row">
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Código</label>
                    <input type="text" class="form-control" style="background-color: rgb(230, 228, 224);" readonly name="codigo" id="exampleFormControlInput1" value="<?php echo  $datos->id ?>"
                        placeholder="Codigo usuario">
                </div>
                <div class="col-md-6 col-sm-12  mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" value="<?php echo  $datos->nombre ?>" required="required"
                        placeholder="Nombre producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio" id="exampleFormControlInput1" value="<?php echo  $datos->precio ?>" required="required"
                        placeholder="Precio producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad total</label>
                    <input type="number" class="form-control" name="total" id="exampleFormControlInput1" value="<?php echo  $datos->cantidad_total ?>" required="required"
                        placeholder="Cantidad total del producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad máxima</label>
                    <input type="number" class="form-control" name="maxima" id="exampleFormControlInput1" value="<?php echo  $datos->cantidad_maxima ?>" required="required"
                        placeholder="Cantidad máxima del producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad mínima</label>
                    <input type="number" class="form-control" name="minima" id="exampleFormControlInput1" value="<?php echo  $datos->cantidad_minima ?>" required="required"
                        placeholder="Cantidad mínima del producto">
                </div>                        

                <div class="col-md-12 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">comentario</label>
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Comentario" name="comentario" id="floatingTextarea" value="assssssssssssssssssssssssssssssssss"></textarea>
                    </div>
                </div>
            </div>  
            <div class="col-md-12 col-sm-12 p-3">                  
                <label for="image" class="custom-file-upload">Seleccionar Imagen</label> <br>
                <input type="file" name="image" id="image">
                <label for="image_name">Nombre de la imagen:</label>           
                <input type="text" class="form-control" name="image_name" id="image_name">
            </div>                   
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-dark">Actualizar</button>
            </div>
       </form>

    </div>
  </div>
</div>
<!---fin ventana Update --->
