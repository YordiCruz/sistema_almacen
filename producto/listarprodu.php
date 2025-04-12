<?php
 include "../header.php";
?>


<table class="table">
  <thead>
    <th>ID:</th>
    <th>Descripcion:</th>
    <th>Categoría:</th>
    <th>Precio:</th>
    <th>Marca:</th>
    <th>Proveedor:</th>
    <th>Imagen:</th>
    <td>Acciones</td>
    
  </thead>
  <tbody>
    <?php
       $producsq = mysqli_query($conec, "SELECT * from producto");
       
       while($pro = mysqli_fetch_array($producsq)){

        ?>

        <tr>
            <td><?php echo $pro[0]; ?></td>
            <td><?php echo $pro[1]; ?></td>
            <td><?php echo $pro[2]; ?></td>
            <td><?php echo $pro[3]; ?></td>
            <td><?php echo $pro[4]; ?></td>
            <td><?php echo $pro[5]; ?></td>
            <td> <img src="../img/<?php echo $pro[6]; ?>" alt="" width="100"> </td>
            <td>  <button>editar</button>
            <button>eliminar</button></td>
        </tr>
       
        <!-- este corte de while es para que cree una fila--->
        <?php
            
       }
    

    ?>
  </tbody>
</table>


<?php
include "../footer.php";

?>