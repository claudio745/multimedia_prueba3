<?php

$conexion = "localhost";
$user = "claudio";
$pass = "12345";
$db = "prueba3_test";

$con = mysqli_connect($conexion, $user, $pass, $db);


if(!$con)
{
    die("Conexion Fallida");
}
?>
