<?php
require_once "../conexion.php";
$id= $_GET["id"];

mysqli_query($conec, "DELETE from producto where id_producto = $id");
//siempre a que cerrar la conexion si no puede estar abierto a posibles ataques
mysqli_close($conec);
header("location:listarprodu.php");

?>

