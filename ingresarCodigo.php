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
    $sql = "SELECT contraseña, cargo FROM personal WHERE rut = '$Rut' LIMIT 1";
    $resultado = $conexion->query($sql);
    $fila = mysqli_fetch_assoc($resultado);

    if(password_verify($Contraseña, $fila['contraseña'])){
      if($fila['cargo'] == 'Administrador' || $fila['cargo'] == 'Operador'){
        header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
        $logs = new log("logs.txt"); 
        $logs->writeLine("Aviso", "Inicio sesion administrador, $Rut");
        $logs->close();
      }else{
        header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
      }
    }else{
      header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
    }
  }
}
?>