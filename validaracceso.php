<?php

require_once "conexion.php";

//recuperar los datos enviados de index.php
$usuario = $_POST["usu"];
$contra = $_POST["contra"];

//consultar a la base de datos
$acceso = mysqli_query($conec, "SELECT * FROM usuarios WHERE log_usuario = '$usuario' and password ='$contra'");

//var_dump imprime lo que sea en un objeto
//var_dump ($acceso);

//agarra un resultado en objeto
$acce = mysqli_fetch_row($acceso);
var_dump($acce);

if($acce !=null){
    //panel principal
    header("location:principal.php");
}else{
    echo "<p class ='error-acce'>error acceso intentelo de nuevo </p>";
    include "index.php";
   
}


?>