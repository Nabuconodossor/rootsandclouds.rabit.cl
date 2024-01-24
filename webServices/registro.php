<?php
include("../modulos/conexionDb.php");
date_default_timezone_set('America/Santiago');

echo "<pre>";var_dump($_GET["nombre"]);
echo "<pre>";var_dump($_GET["apellidos"]);
echo "<pre>";var_dump($_GET["correo"]);
echo "<pre>";var_dump($_GET["password"]);
echo "<pre>";var_dump($_GET["telefono"]);

if(isset($_GET["nombre"]) && isset($_GET["apellidos"]) && isset($_GET["correo"]) && isset($_GET["password"]) && isset($_GET["telefono"]) ){


    echo "<pre>";var_dump($_GET["nombre"]);
    echo "<pre>";var_dump($_GET["apellidos"]);
    echo "<pre>";var_dump($_GET["correo"]);
    echo "<pre>";var_dump($_GET["password"]);
    echo "<pre>";var_dump($_GET["telefono"]);

    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $correo= $_GET["correo"];
    $password = $_GET["password"];
    $telefono = $_GET["telefono"];
    


    // INSERT INTO `Mediciones` (`nombre`, `apellidos`, `correo`, `password`, `Niv_telefono`, `Niv_hum_sus`, `Id_registro`) VALUES ('1', '2', '2023-11-16 20:07:39', '10', '10', '10', NULL);
    $sql = "INSERT INTO Cliente (nombre, apellidos, correo, password,telefono) VALUES('".$nombre."', '".$apellidos."', '".$correo."', '".$password."', '".$telefono."')";
    echo $sql;

    if(mysqli_query($conexion, $sql)) {

        echo "Nueva insercion realizada exitosamente";

    } else {

        echo "Error: ".$sql."<br>". mysqli_error($conexion);

    }
    
} else { echo"No pasa na";}

?>