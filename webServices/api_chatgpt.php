<?php
    session_start();
    $count = $_SESSION['email'];

    $api_chatgpt = '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';

    $mensaje = 'Dame un consejo para el cuidado de las plantas con las siguientes medidas del clima en el dia: Temperatura Ambiental(10°C) , Humedad Ambiental(40%) y Humedad del sustrato(20%)';

    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/chat/completions');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $api_chatgpt,
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n
            \"model\": \"gpt-3.5-turbo\",\n
            \"messages\": [\n{\n\"role\": \"system\",\n
            \"content\": \".$mensaje.\"\n      }\n    ]\n  }");
    
    $response = curl_exec($ch);
    
    curl_close($ch);

    $dec_respuesta = json_decode($response, true);
    // var_dump($respuesta);
    $respuesta = $dec_respuesta['choices'][0]['message']['content'];
    // echo'<br>';
    // echo'<h1>Mensaje enviado:'.$mensaje.'</h1>';
    // echo'<br>';
    // echo'<h1>Respuesta enviado:'.$respuesta.'</h1>';
    // echo'<br>';
?>