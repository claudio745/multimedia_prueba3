<?php

require_once('conexion.php');

if (empty($_POST['Nombres']) || empty($_POST['Apellido1']) || empty($_POST['Apellido2']) || empty($_POST['Ciudad']) || empty($_POST['Correo']) || empty($_POST['Rut']) || empty($_POST['Contraseña'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/register.php");
}
else{
    $Nombres=$_POST['Nombres'];
    $Apellido1=$_POST['Apellido1'];
    $Apellido2=$_POST['Apellido2'];
    $Genero=$_POST['Genero'];
    $Fecha=$_POST['Fecha'];
    $Ciudad=$_POST['Ciudad'];
    $Ciudad=$_POST['Correo'];
    $Rut=$_POST['Rut'];
    $Contraseña=$_POST['Contraseña'];

    $query = "INSERT INTO paciente (nombres, apellido1, apellido2, genero, fechaNacim, ciudadResid, correo, rut, contraseña)
    VALUES ('$Nombres', '$Apellido1', '$Apellido2', '$Genero', '$Fecha', '$Ciudad', '$Correo', '$Rut', '$Contraseña')";
    $resultado = $conexion->query($query);
    
     header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/login.php");
}