<?php

require_once('conexionCodigo.php');

if (empty($_POST['Correo'])){
  header("Location: http://127.0.0.1/multimedia_prueba3/recuperar.php");
}
else{
  $Correo=$_POST['Correo'];
  
  $consulta = "SELECT COUNT(rut) AS existe FROM usuario WHERE correo='$Correo' LIMIT 1";
  $cont = mysqli_query($conexion, $consulta);
  while ($row = mysqli_fetch_array($cont)){
    if($row["existe"] == 1){
      header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
    }
    else{
      header("Location: http://127.0.0.1/multimedia_prueba3/recuperar.php");
    }
  }
}
?>