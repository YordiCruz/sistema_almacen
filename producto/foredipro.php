
<?php

include "../header.php";

$id = $_GET["id"];
$produc = mysqli_query($conec, "SELECT * from producto where id_producto = $id");
 $pr = mysqli_fetch_row ($produc)
?>
<!--el enctype es para que el formulario acepte archivos multiples como imagenes--->
    <form action="editarpro.php?id=<?php echo $id?>" method="post" class="formulario"">
    <div class="row">

    
        <div class="col-50">
        <label for="">Descripción</label>
<!--si agregamos el readonly es para que no se pueda editar-->
        <input type="text" class="form-control" name="descri" value="<?php echo $pr[1]?>">
        <label for="">Categoría</label>
        <input type="text" class="form-control" name="cate" value="<?php echo $pr[2]?>">
        <label for="">Precio</label>
        <input type="text" class="form-control" name="preci" value="<?php echo $pr[3]?>">
        
        </div>
        <div class="col-50">
        <label for="">Marca</label>
        <input type="text" class="form-control" name="marca" value="<?php echo $pr[4]?>">
        <label for="">Proveedor</label>
        <input type="text" class="form-control" name="provee" value="<?php echo $pr[5]?>">
<!--para la imagen-->
        </div>
    </div>
    <div class="row">
        <div class="col-50">
<!--el history.back() es una funcion de js que va hacia atras -->
            <input type="button" class="cancelar" value="Cancelar" onclick="history.back()"></div>
        <div class="col-50">
        <input type="submit" class="form-control" value="Guardar">
        </div>
    </div>

    </form>
  <?php
    include "../footer.php";
?>