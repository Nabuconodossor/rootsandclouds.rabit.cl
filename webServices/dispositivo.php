<?php

header("Content-Type:application/json");

include("../modulos/conexionDb.php");

echo '<pre>';var_dump($_GET['correo']);

if(isset($_GET['correo']) && $_GET['correo']!=""){

    $correo = $_GET["correo"];
    $sql = "SELECT * FROM dispositivo WHERE correo = '$correo'";
    $result = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $Id_Dispositivo = $row["Id_Dispositivo"];
            $Fec_activacion = $row["Fec_activacion"];
            $cod_dip        = $row["cod_dip"];
            $Nombre         = $row["Nombre"];

            response($Id_Dispositivo,$Fec_activacion,$cod_dip,$Nombre);	
        }
    } else {
        echo "Consulta realizada";

        echo "Error: ".$sql."<br>". mysqli_error($conexion);
    }
    
} else { echo"No pasa na";}


function response($Id_Dispositivo,$Fec_activacion,$cod_dip,$Nombre){


    $response["Id_Dispositivo"] = $Id_Dispositivo;
    $response["Fec_activacion"] = $Fec_activacion;
    $response["cod_dip"] = $cod_dip;
    $response["Nombre"] = $Nombre;

    $json_response = json_encode($response);
	echo $json_response;
}

?>