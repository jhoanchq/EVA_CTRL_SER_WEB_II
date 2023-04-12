<?php
// Configuración de cabeceras HTTP
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Manejo de solicitudes GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los parámetros de la solicitud
    $operacion = $_GET['operacion'];
    $fecha = $_GET['fecha'];
    $dias = $_GET['dias'];

    // Resolver la operación de fecha
    switch ($operacion) {
        case 'sumar':
            $resultado = date('Y-m-d', strtotime($fecha . ' + ' . $dias . ' days'));
            break;
        case 'restar':
            $resultado = date('Y-m-d', strtotime($fecha . ' - ' . $dias . ' days'));
            break;
        default:
            $resultado = 'Operación no soportada';
            break;
    }

    // Devolver la respuesta en formato JSON
    $response = array('resultado' => $resultado);
    echo json_encode($response);
}