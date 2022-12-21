<?php
include 'log.php';
require_once('conexionCodigo.php');

session_start(); 
$Rut = $_SESSION['rut'];


if (empty($_POST['id'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/modificarNoticia.php");
    
}
else{

    $id=$_POST['id'];

    $consultaNoticias = "SELECT count(id) AS existe FROM noticia WHERE id = $id";
    $consultaNoticias = $conexion->query($consultaNoticias);
    $fila = mysqli_fetch_assoc($consultaNoticias);

    if($fila['existe'] == 1){
        $Titulo=$_POST['Titulo'];
        $Cuerpo=$_POST['Cuerpo'];
        $Categoria=$_POST['Categoria'];
        $Img=$_POST['Img'];
        $Autor=$_POST['Autor'];

        $query = "DELETE FROM noticia WHERE id = $id";
        $resultado = $conexion->query($query);

        $query = "INSERT INTO noticia (id, titulo, cuerpo, categoria, img, autor)
        VALUES ('$id', '$Titulo', '$Cuerpo', '$Categoria', '$Img', '$Autor')";
        $resultado = $conexion->query($query);
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", " $Rut Modifico la noticia $id");
        $logs->close();

        header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
    }
    else{     
        header("Location: http://127.0.0.1/multimedia_prueba3/agregarNoticia.php");

    }
}