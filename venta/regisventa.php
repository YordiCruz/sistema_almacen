
<?php

include "../header.php";

?>
<!--el enctype es para que el formulario acepte archivos multiples como imagenes--->
    <form  action="registro_produ.php" method="post" class="formulario " >
     <div class="row">
     <div class="col-50">Cliente</label>
        <select name="cliente" class="form-control" id="cliente">
            <option value="">
                Seleccionar
            </option>
            <?php
            $cliente = mysqli_query($conec, "SELECT * from cliente");
            while($cli = mysqli_fetch_array($cliente)){
                ?>
                <option value="<?php echo $cli[0]; ?>">
                    <?php echo $cli[1]." ".$cli[2] ?>
                </option>
                <?php
            }
            ?>
        </select>
        <p id="error-descri" class="errorr"></p>
        <label for="">Producto</label>
        <select name="producto" class="form-control" id="producto">
            <option value="">
                Seleccionar
            </option>
            <?php
            $producto_sql = mysqli_query($conec, "SELECT * from producto");
            while($pro = mysqli_fetch_array($producto_sql)){
                ?>
                <option value="<?php echo $pro[0]; ?>">
                    <?php echo $pro[1]." ".$pro[2] ?>
                </option>
                <?php
            }
            ?>
        </select>
        <p id="error-producto" class="errorr"></p>
        <label for="">Cantidad</label>
        <input type="number" class="form-control" name="cantidad" id="cantidad">
        <p id="error-cantidad" class="errorr"></p>
        </div>
        <div class="col-50">
            <table>
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        
                    </tr>
                </thead>
                <tbody id="tbody">
                    
                        
            </table>
        </div>
     </div>
    
        <div class="row">
                <div class="col-50">
                    <input type="button" class="form-control cancelar" value="Agregar" >
                </div>
                <div class="col-50">
                <input type="submit" class="fom-control" value="Guardar">
                </div>
     </div>
       
    </form>
  <?php
    include "../footer.php";
?>