<?php

require_once('conexion.php');

if (empty($_POST['Correo'])){
  header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/recuperar.php");
}
else{
  $Correo=$_POST['Correo'];
  
  $consulta = "SELECT COUNT(rut) AS existe FROM paciente WHERE correo='$Correo'";
  $cont = mysqli_query($conexion, $consulta);
  while ($row = mysqli_fetch_array($cont)){
    if($row["existe"] == 0){
      header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/recuperar.php");
    }
    else{
      header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/login.php");
    }
  }
}
?>