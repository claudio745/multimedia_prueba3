<?php

require_once('conexionCodigo.php');

if (empty($_POST['Nombres']) || empty($_POST['Apellido1']) || empty($_POST['Apellido2']) || empty($_POST['Rut']) || empty($_POST['Contraseña'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/register.php");
}
else{
    $Nombres=$_POST['Nombres'];
    $Apellido1=$_POST['Apellido1'];
    $Apellido2=$_POST['Apellido2'];
    $Cargo=$_POST['Cargo'];
    $Rut=$_POST['Rut'];
    $Contraseña=$_POST['Contraseña'];

    $pass = password_hash($Contraseña, PASSWORD_DEFAULT);
    $query = "INSERT INTO personal (nombres, apellido1, apellido2, cargo, rut, contraseña)
    VALUES ('$Nombres', '$Apellido1', '$Apellido2', '$Cargo', '$Rut', '$pass')";
    $resultado = $conexion->query($query);
    $resultado = $conexion->query($query);
    $logs = new Log("log.txt"); 
    $logs->writeLine("Aviso", " Registro Exitoso, $Rut");
    $logs->close();
    
    header("Location: http://127.0.0.1/multimedia_prueba3/adminEstadistica.php");
}