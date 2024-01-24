<?php 
include("../modulos/conexionDb.php");
date_default_timezone_set('America/Santiago');

for ($i = 0; $i < 2000; $i++) {
    // Generar valores aleatorios
    $id_cliente = 7;
    $id_dispositivo = 13;
    $fec_reg = date('Y-m-d H:i:s', strtotime('2023-11-16 20:30:00') + $i * 30 * 60);
    $temperatura = rand(-10, 40);
    $niv_hum_amb = rand(-10, 40);
    $niv_hum_sus = rand(0, 100);

    // Consulta de inserción
    $sql = "INSERT INTO Mediciones (Id_cliente, Id_dispositivo, fec_reg, temperatura, Niv_hum_amb, Niv_hum_sus) 
            VALUES ($id_cliente, $id_dispositivo, '$fec_reg', $temperatura, $niv_hum_amb, $niv_hum_sus)";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Inserción exitosa en la iteración $i<br>";
    } else {
        echo "Error en la inserción: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>