<?php

require_once('conexionCodigo.php');

if (empty($_POST['Rut']) || empty($_POST['Contraseña'])){
  header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
}
else{
  $Rut=$_POST['Rut'];
  $Contraseña=$_POST['Contraseña'];
  $consulta = "SELECT COUNT(rut) AS existe, contraseña FROM usuario WHERE rut='$Rut'";
  $resultado = mysqli_query($conexion, $consulta);

  while ($row = mysqli_fetch_array($resultado)){
    if($row["existe"] == 1 || password_verify($Contraseña, $row["contraseña"])){
      header("Location: http://127.0.0.1/multimedia_prueba3/usuarioIndex.php");
    }
    else{
      header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
    }
  }
}
?>