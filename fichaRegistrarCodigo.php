<?php

session_start(); 
$Rut = $_SESSION['rut'];

require_once('conexionCodigo.php');

$consulta = "SELECT count(rut) AS existe FROM ficha WHERE rut = '$Rut' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);


if (empty($_POST['antEnfer']) || empty($_POST['alergias']) || empty($_POST['enferCroni']) || empty($_POST['mediActu'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/fichaRegister.php");
}
else if($fila['existe'] = 1){

    $query = "DELETE FROM ficha WHERE rut = '$Rut'";
    $resultado = $conexion->query($query);

    $AntEnfer=$_POST['antEnfer'];
    $Alergias=$_POST['alergias'];
    $EnferCroni=$_POST['enferCroni'];
    $MediActu=$_POST['mediActu'];

    $query = "INSERT INTO ficha (rut, antEnfer, alergias, enferCroni, mediActu)
    VALUES ('$Rut', '$AntEnfer', '$Alergias', '$EnferCroni', '$MediActu')";
    $resultado = $conexion->query($query);

    header("Location: http://127.0.0.1/multimedia_prueba3/usuarioServicios.php");

}
else{
    $AntEnfer=$_POST['antEnfer'];
    $Alergias=$_POST['alergias'];
    $EnferCroni=$_POST['enferCroni'];
    $MediActu=$_POST['mediActu'];

    $query = "INSERT INTO ficha (rut, antEnfer, alergias, enferCroni, mediActu)
    VALUES ('$Rut', '$AntEnfer', '$Alergias', '$EnferCroni', '$MediActu')";
    $resultado = $conexion->query($query);
    
     header("Location: http://127.0.0.1/multimedia_prueba3/usuarioServicios.php");
}
