
<?php

include "../header.php";

?>
<!--el enctype es para que el formulario acepte archivos multiples como imagenes--->
    <form  action="registro_produ.php" method="post" class="formulario row" enctype="multipart/form-data" onsubmit="return validar() ">
        <div class="col-50">
        <label for="">Descripción</label>
        <input type="text" class="form-control" name="descri" id="descrip">
        <p id="error-descri" class="errorr"></p>
        <label for="">Categoría</label>
        <input type="text" class="form-control" name="cate" id="catego">
        <p id="error-cate" class="errorr"></p>
        <label for="">Precio</label>
        <input type="text" class="form-control" name="preci" id="precio">
        <p id="error-precio" class="errorr"></p>
        <input type="button" class="cancelar" value="Cancelar" >
        </div>
        <div class="col-50">
        <label for="">Marca</label>
        <input type="text" class="form-control" name="marca" id="marc">
        <p id="error-marca" class="errorr"></p>
        <label for="">Proveedor</label>
        <input type="text" class="form-control" name="provee" id="prov">
        <p id="error-provee" class="errorr"></p>
        <label for="">Imagen</label>
        <input type="file" class="form-control" name="imgprodu" >
        <input type="submit" class="form-control" value="Guardar">
        </div>
    </form>
  <?php
    include "../footer.php";
?>