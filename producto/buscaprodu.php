<?php
include "../header.php";

$busca = $_POST["busca"];
$producto = mysqli_query($conec, "SELECT * from producto where descripcion like '%$busca%' or categoria like '%$busca%' or marca like '%$busca%'");


?>

<table class="table">
    <caption>Productos</caption>
   <thead> 
    <tr>
        <th>Descripcion</th>
        <th>Categoría</th>
        <th>Precio</th>
        <th>Marca</th>
        <th>Proveedor</th>
        <th>Imagen</th>
    </tr>
   </thead>
   <tbody>
    <?php
    while($prod = mysqli_fetch_array($producto)){
        ?>
        <tr>
            <td><?php echo $prod[1]; ?></td>
            <td><?php echo $prod[2]; ?></td>
            <td><?php echo $prod[3]; ?></td>
            <td><?php echo $prod[4]; ?></td>
            <td><?php echo $prod[5]; ?></td>
            <td><img src="<?php echo $base_url?>./img/<?php echo $prod[6]; ?>" alt="" style="width: 100px; height: 100px;"></td>

        </tr>
        <?php
    }
    ?>
   </tbody>
</table>

<?php

include "../footer.php";        
?>