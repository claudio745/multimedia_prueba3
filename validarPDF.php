<?php

session_start(); 
$Rut = $_SESSION['rut'];

require_once('conexionCodigo.php');

$consulta = "SELECT count(rut) AS existe FROM ficha WHERE rut = '$Rut' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);

if($fila['existe'] != 0)
{
  header("Location: http://127.0.0.1/multimedia_prueba3/fichaMedica.php");
}
else
{
  header("Location: http://127.0.0.1/multimedia_prueba3/fichaRegister.php");
}

?>