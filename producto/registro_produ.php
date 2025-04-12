<?php
require_once "../conexion.php";

$descri = $_POST["descri"];
$cate =$_POST["cate"];
$preci =$_POST["preci"];
$marca =$_POST["marca"];
$provee = $_POST["provee"];
//se sube el nombre de la imagen
$image = $_FILES["imgprodu"];
$nameimg = $image["name"];
$tmp = $image["tmp_name"];

//sirve para subir archivos 
move_uploaded_file($tmp, "../img/".$nameimg);
mysqli_query($conec, "INSERT INTO producto(descripcion, categoria, precio, marca, proveedor, imagen) values('$descri','$cate', '$preci', '$marca', '$provee',
  '$nameimg')");

  mysqli_close($conec);
  header("Location: ../menuproduc.php");
?>