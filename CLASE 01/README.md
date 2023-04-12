**Para crear una API REST básica en PHP, siga estos pasos
Cree un archivo index.php y agregue el siguiente código:**


`<?php
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
}`


**Este archivo establece las cabeceras HTTP necesarias para permitir solicitudes desde cualquier origen y devuelve una respuesta en formato JSON.

1. Ejecute el archivo index.php en un servidor web.

2. Pruebe la API REST utilizando herramientas como Postman o cURL. Por ejemplo, para probar una solicitud GET, abra Postman y cree una solicitud GET con la URL del servidor web que aloja la API REST.

Eso es todo. Ahora tiene una API REST básica en PHP.**