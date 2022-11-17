<?php


include "conexion.php";
error_reporting(0);
session_start();

if(isset($_SESSION["username"]))
{
    header("location: index.php");
}

if(isset($_POST["submit"]))
{
    $username=$_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["pass"]);
    $cpassword = md5($_POST["cpass"]);

    if($password == $cpassword)
    {
        $sql= "SELECT * FROM users WHERE email = '$email'";
        $resultado = mysqli_query($conexion, $sql);
        if(!$resultado->num_rows > 0)
        {
            $sql = "INSERT INTO prueba3_test ($username, $password, $email)";
            $resultado = mysqli_query($conexion, $sql);

            if($resultado)
            {
                echo "Usuario creado con exito";
                $username = "";
                $email = "";
                $_POST["password"] = "";
                $_POST["cpassword"] = "";

            }
            else{
                echo "hay un error"
            }
        }
    }

}