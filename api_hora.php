<?php
// Establece la cabecera de respuesta para indicar que el contenido es JSON
header('Content-Type: application/json');

// Obtiene la hora actual en formato ISO 8601
$hora_actual = date('c');

// Crea un array asociativo con la hora actual
$respuesta = array(
    'hora' => $hora_actual
);

// Convierte el array en formato JSON y lo imprime
echo json_encode($respuesta);
?>
