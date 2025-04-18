<?php
 require_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de navegacion</title>
    <link rel="stylesheet" href="<?php echo $base_url; ?>./css/style.css">
    <script src="<?php echo $base_url; ?>./js/producto.js"></script>
</head>
<body>
    <header class="head">
        <nav class="nav">
            <ul>
                <li>
                    <a href="">Inicio</a>
                </li>
                <li><a href="<?php echo $base_url;?>menuproduc.php">Productos</a></li>
                <li><a href="<?php echo $base_url;?>menuventa.php">Ventas</a></li>
                <li><a href="">Ingresos</a></li>
                <li><a href="">Clientes</a></li>
            </ul>
        </nav>
    </header>