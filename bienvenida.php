<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <div id="container">
    <h1>Bienvenido al ejercicio de Cookies</h1>

    <?php
    if (isset($_COOKIE["usuario"])) {
        echo "Bienvenido al ejercicio, " . $_COOKIE["usuario"];
    ?>
        <form action="cerrarSesion.php">
            <input type="submit" name="Cerrar sesion" value="Cerrar sesión">
        </form>
    <?php

    } else {
        echo "La cookie no se ha generado, no has iniciado sesión";
    }
    ?>
    </div>

</body>

</html>