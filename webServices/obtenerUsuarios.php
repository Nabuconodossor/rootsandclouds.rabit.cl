<?php

include("../modulos/conexionDb.php");

$consulta = "SELECT * FROM login";

$resultado = mysqli_query($conexion,$consulta);

// echo $resultado
// while($row = mysql_fetch_array($resultado)) {
//     echo $row['fieldname']; 
// }
// echo "<pre>";var_dump($resultado);exit;

// $filas = mysqli_num_rows($resultado);
// mysqli_fetch_assoc($query);

$result = mysqli_fetch_assoc($resultado);
echo "<pre>";var_dump($result);exit;