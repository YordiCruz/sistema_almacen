<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <!--el action es a donde se mandara la informacion mediante el metodo post--->
    <form action="validaracceso.php" method="post">
        <div class="container">
            <h1 class="h1">Login</h1>
            <div class="tex">
                <label for="">Correo</label>
                <input type="text" placeholder="Ingrese su correo" name="usu">
                <label for="">Contraseña</label>
<!-- el name es el indicador algo como el id--->
                <input type="password" placeholder="Ingrese su contraseña" name="contra">
                <input type="submit" value="Acceder">
            </div>
        </div>

    </form>
   


    <script src="./js/ejercicios.js"></script>
</body>
</html>