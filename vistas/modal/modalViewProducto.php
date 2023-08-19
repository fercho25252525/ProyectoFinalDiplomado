
<style>
    .bg-card {
        background-color: #495c80
    }
</style>
<!--ventana para Update--->
<div class="modal fade" id="editChildresn<?php echo $datos->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-card">
        <h6 class="modal-title" style="color: #fff; text-align: center;">
            Actualizar Información
        </h6>
      </div>
        <form>
            <div class="modal-body row">
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Código</label>
                    <input type="text" class="form-control" style="background-color: rgb(230, 228, 224);" readonly name="codigo" id="exampleFormControlInput1" value="<?php echo  $datos->id ?>"
                        placeholder="Codigo usuario">
                </div>
                <div class="col-md-6 col-sm-12  mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" style="background-color: rgb(230, 228, 224);" readonly value="<?php echo  $datos->nombre ?>" required="required"
                        placeholder="Nombre producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Precio</label>
                    <input type="number" class="form-control" name="precio" id="exampleFormControlInput1" style="background-color: rgb(230, 228, 224);" readonly value="<?php echo  $datos->precio ?>" required="required"
                        placeholder="Precio producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad total</label>
                    <input type="number" class="form-control" name="total" id="exampleFormControlInput1" style="background-color: rgb(230, 228, 224);" readonly value="<?php echo  $datos->cantidad_total ?>" required="required"
                        placeholder="Cantidad total del producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad máxima</label>
                    <input type="number" class="form-control" name="maxima" id="exampleFormControlInput1" style="background-color: rgb(230, 228, 224);" readonly value="<?php echo  $datos->cantidad_maxima ?>" required="required"
                        placeholder="Cantidad máxima del producto">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                    <label for="exampleFormControlInput1" class="form-label">Cantidad mínima</label>
                    <input type="number" class="form-control" name="minima" id="exampleFormControlInput1" style="background-color: rgb(230, 228, 224);" readonly value="<?php echo  $datos->cantidad_minima ?>" required="required"
                        placeholder="Cantidad mínima del producto">
                </div> 
            </div>   
       </form>
    </div>
  </div>
</div>
