<?php

require_once('conexionCodigo.php');

if (empty($_POST['Rut']) || empty($_POST['Contraseña']))
{
  header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
}
else
{
  $Rut=$_POST['Rut'];
  $Contraseña=$_POST['Contraseña'];

  $sql = "SELECT contraseña FROM usuario WHERE rut = '$Rut' LIMIT 1";
  $resultado = $conexion->query($sql);
  $fila = mysqli_fetch_assoc($resultado);

  if(password_verify($Contraseña, $fila['contraseña'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/usuarioIndex.php");

  }else{
    $sql = "SELECT contraseña FROM personal WHERE rut = '$Rut' LIMIT 1";
    $resultado = $conexion->query($sql);
    $fila = mysqli_fetch_assoc($resultado);

    if(password_verify($Contraseña, $fila['contraseña'])){
      header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
  
    }else{
      header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
    }
  }
}
?>