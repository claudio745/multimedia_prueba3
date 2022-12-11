<?php

require_once('conexionCodigo.php');

$contrasenas_no_seguras = array("123456", "password", "123456789", "guest", "qwerty", "12345678", "11111", "12345", "col123456", "123123", "1234", "1234567890", "000000", "555555", "666666", "654321", "123321", "777777", "123");

if (empty($_POST['Nombres']) || empty($_POST['Apellido1']) || empty($_POST['Apellido2']) || empty($_POST['Ciudad']) || empty($_POST['Correo']) || empty($_POST['Rut']) || empty($_POST['Contraseña'])){
    header("Location: http://127.0.0.1/multimedia_prueba3/register.php");
}
else{
    $Nombres=$_POST['Nombres'];
    $Apellido1=$_POST['Apellido1'];
    $Apellido2=$_POST['Apellido2'];
    $Genero=$_POST['Genero'];
    $Fecha=$_POST['Fecha'];
    $Ciudad=$_POST['Ciudad'];
    $Correo=$_POST['Correo'];
    $Rut=$_POST['Rut'];
    $Contraseña=$_POST['Contraseña'];

    if ((strlen($Contraseña) < 8) && (!preg_match("/[a-z]/", $Contraseña) && !preg_match("/[0-9]/", $Contraseña)) && (in_array($Contraseña, $contrasenas_no_seguras))) {
        echo '<script>alert("Contraseña insegura, intente de nuevo")</script>';
        $logs = new log("logs.txt"); 
        $logs->writeLine("Aviso", " Ingreso de contraseña insegura en registro.");
        $logs->close();
    }
    if(empty($_POST['Rut'])){
            // separar el RUT en número y dígito verificador
            $partes = explode("-", $Rut);
            $numero = $partes[0];
            $digito = $partes[1];
          
            // aplicar la fórmula de verificación de RUT
            $multiplos = array(2, 3, 4, 5, 6, 7);
            $total = 0;
            for ($i = strlen($numero) - 1; $i >= 0; $i--) {
              $total += $numero[$i] * $multiplos[$i % 6];
            }
            $resto = $total % 11;
            $digitoVerificador = ($resto == 10) ? "K" : $resto;
          
            // comparar el dígito verificador calculado con el dígito verificador del RUT
            if ($digitoVerificador == $digito) {
              return true;
            } else {
                echo '<script>alert("Rut Invalido, intente de nuevo")</script>';
                $logs = new log("logs.txt"); 
                $logs->writeLine("Aviso", " Ingreso de Rut Invalido en registro.");
                $logs->close();
            }
    }
    else{
        $pass = password_hash($Contraseña, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuario (nombres, apellido1, apellido2, genero, fechaNacim, ciudadResid, correo, rut, contraseña)
        VALUES ('$Nombres', '$Apellido1', '$Apellido2', '$Genero', '$Fecha', '$Ciudad', '$Correo', '$Rut', '$pass')";
        $resultado = $conexion->query($query);
        $logs = new log("logs.txt"); 
        $logs->writeLine("Aviso", " Registro Exitoso, $Rut");
        $logs->close();
        
         header("Location: http://127.0.0.1/multimedia_prueba3/login.php");
    }
}
