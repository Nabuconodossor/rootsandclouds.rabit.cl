<?php
header("Content-Type:application/json; charset=utf8");

include("../modulos/conexionDb.php");

$sql = "SELECT * FROM login ";

    $result = mysqli_query($conexion, $sql);
    $datos = array();

    if(mysqli_num_rows($result)> 0){

        while($row =mysqli_fetch_object($result)){
            $datos[] = $row;

        }
        echo json_encode($datos);

    } else {
        echo "Consulta no realizada";

        echo "Error: ".$sql."<br>". mysqli_error($conexion);
    }
    





?>