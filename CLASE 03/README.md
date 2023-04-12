

**Para crear una API REST básica en PHP que calcule fechas, siga estos pasos:**

**Cree un archivo index.php y agregue el siguiente código:**

```PHP
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

```

**Este archivo establece las cabeceras HTTP necesarias para permitir solicitudes desde cualquier origen y recibe los parámetros de la solicitud GET, que incluyen el tipo de operación de fecha (sumar o restar días), la fecha de origen y la cantidad de días a sumar o restar. Luego, resuelve la operación de fecha y devuelve el resultado en formato JSON.**

**Ejecute el archivo index.php en un servidor web.**

**Pruebe la API REST utilizando herramientas como Postman o cURL. Por ejemplo, para probar una solicitud GET que sume 5 días a la fecha 2023-04-09, abra Postman y cree una solicitud GET con la siguiente URL: http://localhost/index.php?operacion=sumar&fecha=2023-04-09&dias=5**

**Eso es todo. Ahora tiene una API REST básica en PHP que calcula fechas.**