<?php
include 'log.php';
require_once('conexionCodigo.php');

session_start(); 
$Rut = $_SESSION['rut'];

$Eliminar=$_POST['Eliminar'];

if($Eliminar > 0 || $Eliminar != null){
    $query = "DELETE FROM noticia WHERE id = $Eliminar";
    $resultado = $conexion->query($query);
    $logs = new Log("log.txt"); 
    $logs->writeLine("Aviso", " Eliminó Noticia: , $Rut");
    $logs->close();

    header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
}
else{
    header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
}

?>