
<?php

include "../header.php";

?>
<form action="" class="formulario row">
    <div class="col-50">
      <label for="">Descripción</label>
      <input type="text" class="form-control">
      <label for="">Categoría</label>
      <input type="text" class="form-control">
      <label for="">Precio</label>
      <input type="text" class="form-control">
      <input type="button" class="cancelar" value="Cancelar">
    </div>
    <div class="col-50">
      <label for="">Marca</label>
      <input type="text" class="form-control">
      <label for="">Proveedor</label>
      <input type="text" class="form-control">
      <label for="">Imagen</label>
      <input type="file" class="form-control">
      <input type="submit" class="form-control" value="Guardar">
    </div>
  </form>
  <?php
    include "../footer.php";
?>