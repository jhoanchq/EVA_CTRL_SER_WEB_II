<?php
// Configuración de cabeceras HTTP
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Manejo de solicitudes GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Código para manejar solicitudes GET
    $response = array('mensaje' => 'Solicitud GET recibida');
    echo json_encode($response);
}

// Manejo de solicitudes POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Código para manejar solicitudes POST
    $response = array('mensaje' => 'Solicitud POST recibida');
    echo json_encode($response);
}

// Manejo de solicitudes PUT
if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    // Código para manejar solicitudes PUT
    $response = array('mensaje' => 'Solicitud PUT recibida');
    echo json_encode($response);
}

// Manejo de solicitudes DELETE
if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    // Código para manejar solicitudes DELETE
    $response = array('mensaje' => 'Solicitud DELETE recibida');
    echo json_encode($response);
}