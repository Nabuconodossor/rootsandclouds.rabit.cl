<?php
$conexion = mysqli_connect('CREDENCIALES', 'CREDENCIALES','CREDENCIALES','CREDENCIALES');

if (!$conexion) {

    die("Error de conexión a la base de datos: ". mysqli_connect_error());
}

// echo"Conexion a BBDD EXITOSA";