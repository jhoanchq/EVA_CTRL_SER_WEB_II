**Para crear una API REST básica en PHP que resuelva operaciones matemáticas, siga estos pasos:**

**1. Cree un archivo index.php y agregue el siguiente código:**

```PHP
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

```



**Este archivo establece las cabeceras HTTP necesarias para permitir solicitudes desde cualquier origen y recibe los parámetros de la solicitud GET, que incluyen el tipo de operación matemática (suma, resta, multiplicación o división) y los dos números que se van a operar. Luego, resuelve la operación matemática y devuelve el resultado en formato JSON.**

**2. Ejecute el archivo index.php en un servidor web.**

**3. Pruebe la API REST utilizando herramientas como Postman o cURL. Por ejemplo, para probar una solicitud GET que sume los números 2 y 3, abra Postman y cree una solicitud GET con la siguiente URL: http://localhost/index.php?operacion=suma&numero1=2&numero2=3**

**Eso es todo. Ahora tiene una API REST básica en PHP que resuelve operaciones matemáticas.**