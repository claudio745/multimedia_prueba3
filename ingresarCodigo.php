<?php
include 'log.php';
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
    session_start();
    $_SESSION['rut'] = $Rut;
    $archivo =fopen("log.txt","a");
    fwrite($archivo, 'Ingreso exitoso: '.$Rut."\n". PHP_EOL);
    fclose($archivo);
    header("Location: http://127.0.0.1/multimedia_prueba3/usuarioIndex.php");

  }else{
    $sql = "SELECT contraseña, cargo FROM personal WHERE rut = '$Rut' LIMIT 1";
    $resultado = $conexion->query($sql);
    $fila = mysqli_fetch_assoc($resultado);

    if(password_verify($Contraseña, $fila['contraseña'])){
      if($fila['cargo'] == 'Administrador' || $fila['cargo'] == 'Operador'){
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", "Inicio sesion administrador, $Rut");
        $logs->close();
        header("Location: http://127.0.0.1/multimedia_prueba3/adminIndex.php");
      }else{
        header("Location: http://127.0.0.1/multimedia_prueba3/usuarioIndex.php");
      }
    }else{
      header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
    }
  }
}
?>