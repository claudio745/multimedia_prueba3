<?php

require_once('conexionCodigo.php');

//Consulta
$consulta = "SELECT * FROM usuario WHERE rut = $Rut LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);

//solicito libreria
require 'phpqrcode/qrlib.php';

$nom = 'QR/';

if(!file_exists($nom))
    mkdir($nom);

$nombreArch = $nom.'usuarioQR.png';

$tamanio = 10;
$nivel = 'M';
$marco = 3;
$contenido = 'Rut: '.$fila['rut'].' '.'Nombre Completo: '.$fila['nombres'].' '.$fila['apellido1'].' '.$fila['apellido2'].' '.'Genero: '.$fila['genero'].' '.'Fecha nacimiento: '.$fila['fechaNacim'].' '.'Ciudad de residencia: '.$fila['ciudadResid'];

QRcode::png($contenido, $nombreArch, $nivel, $tamanio, $marco);
?>