<?php

require_once('conexion.php');

if (empty($_POST['Rut']) || empty($_POST['Contraseña'])){
  header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/login.php");
}
else{
  $Rut=$_POST['Rut'];
  $Contraseña=$_POST['Contraseña'];
  $consulta = "SELECT COUNT(rut) AS existe, contraseña FROM usuario WHERE rut='$Rut'";
  $cont = mysqli_query($conexion, $consulta);

  if (password_verify('contraseña', $pass)){
    echo 'Password is valid!';
  } else {
      echo 'Invalid password.';
  }

  while ($row = mysqli_fetch_array($cont)){
    if($row["existe"] == 0){
      header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/login.php");
    }
    else{
      header("Location: http://127.0.0.1/multimedia_prueba3/Prueba_3/pagusuario.php");
    }
  }
}
?>