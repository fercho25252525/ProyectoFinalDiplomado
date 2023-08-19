
<style>
    .bg-card {
        background-color: #495c80
    }
</style>
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo  $datos->codigo ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-card">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
      </div>
        <form method="POST" action="../controlador/actualizar_usuario.php">
            <div class="modal-body row">
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Código</label>
                    <input type="text" class="form-control" style="background-color: rgb(230, 228, 224);" readonly name="codigo" id="exampleFormControlInput1" value="<?php echo  $datos->codigo ?>"
                        placeholder="Codigo usuario">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="exampleFormControlInput1" placeholder="Usuario" value="<?php echo  $datos->usuario ?>">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" value="<?php echo  $datos->nombre ?>"
                        placeholder="Nombre usuario">
                </div>      
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="exampleFormControlInput1" value="<?php echo  $datos->apellido ?>"
                        placeholder="Apellido usuario">
                </div>  
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">N° Documento</label>
                    <input type="number" class="form-control" name="documento" id="exampleFormControlInput1" value="<?php echo  $datos->num_documento ?>"
                        placeholder="Documento usuario">
                </div>            
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" id="exampleFormControlInput1" value="<?php echo  $datos->correo ?>"
                        placeholder="Correo usuario">
                </div>                   
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Estado</label>
                    <select class="form-select form-select-mb" name="estado" aria-label=".form-select-sm example" value="<?php echo  $datos->estado ?>">
                        <option value="Activo" <?php if ($datos->estado === "Activo") echo "selected"; ?>>Activo</option>
                        <option value="Inactivo"<?php if ($datos->estado === "Inactivo") echo "selected"; ?>>Inactivo</option>
                    </select>
                </div>
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
