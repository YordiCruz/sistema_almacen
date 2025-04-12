
<?php

include "../header.php";

?>
<!--el enctype es para que el formulario acepte archivos multiples como imagenes--->
    <form action="registro_produ.php" method="post" class="formulario row" enctype="multipart/form-data">
        <div class="col-50">
        <label for="">Descripción</label>
        <input type="text" class="form-control" name="descri">
        <label for="">Categoría</label>
        <input type="text" class="form-control" name="cate">
        <label for="">Precio</label>
        <input type="text" class="form-control" name="preci">
        <input type="button" class="cancelar" value="Cancelar">
        </div>
        <div class="col-50">
        <label for="">Marca</label>
        <input type="text" class="form-control" name="marca">
        <label for="">Proveedor</label>
        <input type="text" class="form-control" name="provee">
        <label for="">Imagen</label>
        <input type="file" class="form-control" name="imgprodu">
        <input type="submit" class="form-control" value="Guardar">
        </div>
    </form>
  <?php
    include "../footer.php";
?>