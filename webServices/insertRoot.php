<?php
include("../modulos/conexionDb.php");
date_default_timezone_set('America/Santiago');

echo "<pre>";var_dump($_GET["Id_cliente"]);
echo "<pre>";var_dump($_GET["Id_dispositivo"]);
echo "<pre>";var_dump($_GET["temperatura"]);
echo "<pre>";var_dump($_GET["humedadAmbiente"]);
echo "<pre>";var_dump($_GET["humedadSustrato"]);

// exit;

if(isset($_GET["Id_cliente"]) && isset($_GET["Id_dispositivo"]) && isset($_GET["temperatura"]) && isset($_GET["humedadAmbiente"]) && isset($_GET["humedadSustrato"]) ){


    $id_cliente = $_GET["Id_cliente"];
    $id_dispositivo = $_GET["Id_dispositivo"];
    // $fec_reg = "2012-08-06";
    $fec_reg=date("Y-m-d H:i:s");
    $temperatura = $_GET["temperatura"];
    $hum_amb = $_GET["humedadAmbiente"];
    $hum_sus = $_GET["humedadSustrato"];


    // INSERT INTO `Mediciones` (`Id_cliente`, `Id_dispositivo`, `fec_reg`, `temperatura`, `Niv_hum_amb`, `Niv_hum_sus`, `Id_registro`) VALUES ('1', '2', '2023-11-16 20:07:39', '10', '10', '10', NULL);
    $sql = "INSERT INTO Mediciones (Id_cliente, Id_dispositivo, fec_reg, temperatura, Niv_hum_amb, Niv_hum_sus) VALUES(".$id_cliente.", ".$id_dispositivo.", '".$fec_reg."', ".$temperatura.", ".$hum_amb.", ".$hum_sus.")";
    // echo $sql;exit;

    if(mysqli_query($conexion, $sql)) {

        echo "Nueva insercion realizada exitosamente";

    } else {

        echo "Error: ".$sql."<br>". mysqli_error($conexion);

    }
    
} else { echo"No pasa na";}
?>