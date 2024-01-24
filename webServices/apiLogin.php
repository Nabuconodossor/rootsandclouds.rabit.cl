<?php

header("Content-Type:application/json; charset=utf8");

include("../modulos/conexionDb.php");

// echo '<pre>';var_dump($_GET['email']);

if(isset($_GET['email']) && $_GET['email']!=" " && isset($_GET['password']) && $_GET['password']!=" "){

    $email = $_GET["email"];
    $password = $_GET["password"];
    $sql = "SELECT * FROM login WHERE email = '$email' AND password ='$password'";
    $result = mysqli_query($conexion, $sql);
    $datos = array();

    if(mysqli_num_rows($result)> 0){

        while($row =mysqli_fetch_object($result)){
            $datos[] = $row;
        }
        echo json_encode($datos);

    } else {
        echo "Consulta realizada";

        echo "Error: ".$sql."<br>". mysqli_error($conexion);
    }
    
} else { echo"No pasa na";}


?>