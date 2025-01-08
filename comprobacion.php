<?php
$usu = $_POST["usuario"];
$cont = $_POST["contraseña"];

//Conexion BD

$bd = new mysqli('localhost', 'root', '', 'usuarios');
$bd->set_charset('utf8');

//Compruebo que el usuario esta bien
$sentc = "SELECT * from usuario where usuario = '$usu' AND contraseña = '$cont'";
$const = $bd->prepare($sentc);
$const->bind_result($nombre, $contraseña);
$const->execute();

//Creo la cookie

$n_cookie = "usuario";
$val_cookie = $usu;
setcookie($n_cookie, $val_cookie, time() + (86400 * 30));

header("Location: ./bienvenida.php");
