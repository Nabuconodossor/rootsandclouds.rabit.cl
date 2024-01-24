<?php

header("Content-Type:application/json");

include("../modulos/conexionDb.php");

if(isset($_GET['Id_cliente']) && $_GET['Id_cliente']!=""){

    $Id_cliente = $_GET["Id_cliente"];

    $sql = "SELECT * FROM Mediciones WHERE Id_cliente=$Id_cliente";
    $result = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($result)> 0){

        while($row = mysqli_fetch_assoc($result)){
            $Id_cliente = $row["Id_cliente"];
            $Id_dispositivo = $row["Id_dispositivo"];
            $fec_reg = $row["fec_reg"];
            $temperatura = $row["temperatura"];
            $Niv_hum_amb = $row["Niv_hum_amb"];
            $Niv_hum_sus = $row["Niv_hum_sus"];
            $Id_registro = $row["Id_registro"];

            response($Id_cliente,$Id_dispositivo,$fec_reg,$temperatura,$Niv_hum_amb,$Niv_hum_sus,$Id_registro);	
        }
    } else {
        echo "Consulta realizada";

        echo "Error: ".$sql."<br>". mysqli_error($conexion);
    }
    
} else { echo"No pasa na";}
function response($Id_cliente,$Id_dispositivo,$fec_reg,$temperatura,$Niv_hum_amb,$Niv_hum_sus,$Id_registro){

    $response["Id_cliente"] = $Id_cliente;
    $response["Id_dispositivo"] = $Id_dispositivo;
    $response["fec_reg"] = $fec_reg;
    $response["temperatura"] = $temperatura;
    $response["Niv_hum_amb"] = $Niv_hum_amb;
    $response["Niv_hum_sus"] = $Niv_hum_sus;
    $response["Id_registro"] = $Id_registro;

    $json_response = json_encode($response);
	echo $json_response;
}

?>