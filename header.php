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
</head>
<body>
    <header class="head">
        <nav class="nav">
            <ul>
                <li>
                    <a href="">Inicio</a>
                </li>
                <li><a href="menuproduc.php">Productos</a></li>
                <li><a href="">Ventas</a></li>
                <li><a href="">Ingresos</a></li>
                <li><a href="">Personal</a></li>
            </ul>
        </nav>
    </header>