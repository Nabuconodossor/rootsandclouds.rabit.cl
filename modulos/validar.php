<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = $_POST['email'];
$password = $_POST['password'];

session_start();

$_SESSION['email'] = $email;
// $_SESSION['pawa'] = $password;

include('conexionDb.php');

$consulta="SELECT * FROM login WHERE email = '$email' AND password ='$password'";
// echo "<pre>";var_dump($consulta);
$resultado = mysqli_query($conexion,$consulta);

$filas = mysqli_num_rows($resultado);
// echo "<pre>";var_dump($_SESSION);exit;
// echo $filas;

if($filas){

    header("Location: https://rootsandclouds.rabit.cl/modulos/dashBoard.php");
    exit;
}else{
            
    // Credenciales inválidas, muestra un mensaje de error en un pop-up y redirige a la página de inicio de sesión
    
    
    header("Location: ./../index.php?error=1");


}

// mysqli_free_result($resultado);
mysqli_close($conexion);



?>