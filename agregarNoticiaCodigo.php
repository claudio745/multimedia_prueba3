<?php

require_once('conexionCodigo.php');

if (empty($_POST['Titulo']) || empty($_POST['Cuerpo']) || empty($_POST['Img']) || empty($_POST['Autor'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/agregarNoticia.php");
}
else{
    $Titulo=$_POST['Titulo'];
    $Cuerpo=$_POST['Cuerpo'];
    $Categoria=$_POST['Categoria'];
    $Img=$_POST['Img'];
    $Autor=$_POST['Autor'];

    $query = "INSERT INTO noticia (titulo, cuerpo, categoria, img, autor)
    VALUES ('$Titulo', '$Cuerpo', '$Categoria', '$Img', '$Autor')";
    $resultado = $conexion->query($query);
    
     header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
}