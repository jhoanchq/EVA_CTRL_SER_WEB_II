<?php
// Configuración de cabeceras HTTP
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Manejo de solicitudes GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los parámetros de la solicitud
    $operacion = $_GET['operacion'];
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    // Resolver la operación matemática
    switch ($operacion) {
        case 'suma':
            $resultado = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado = $numero1 * $numero2;
            break;
        case 'division':
            $resultado = $numero1 / $numero2;
            break;
        default:
            $resultado = 'Operación no soportada';
            break;
    }

    // Devolver la respuesta en formato JSON
    $response = array('resultado' => $resultado);
    echo json_encode($response);
}
