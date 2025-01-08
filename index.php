<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <h1>Inicio sesión</h1>
    <form action="./comprobacion.php" method="post">
        <label for="nombre">Usuario:</label>
        <input type="text" placeholder="Usuario" name="usuario">
        <br>
        <label for="contraseña">Contraseña:</label>
        <input type="text" placeholder="Contraseña" name="contraseña">
        <br>
        <input type="submit">
    </form>

</body>

</html>