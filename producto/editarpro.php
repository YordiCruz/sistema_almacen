<?php
require_once ("../conexion.php");
$id = $_GET["id"];
 
$descri = $_POST["descri"];
$cate =$_POST["cate"];
$preci =$_POST["preci"];
$marca =$_POST["marca"];
$provee = $_POST["provee"];

 mysqli_query($conec, "UPDATE producto set descripcion = '$descri', categoria='$cate', precio ='$preci', marca= '$marca', proveedor='$provee' where id_producto= $id" );
mysqli_close($conec);
header("location: listarprodu.php");
?>