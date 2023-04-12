<?php
// Configuración de cabeceras HTTP
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Manejo de solicitudes GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Obtener los parámetros de la solicitud
    $nombre = $_GET['nombre'];

    // Crear una imagen en blanco de 400x200 píxeles
    $image = imagecreate(400, 200);

    // Establecer el color de fondo
    $bgColor = imagecolorallocate($image, 255, 255, 255);

    // Establecer el color del texto
    $textColor = imagecolorallocate($image, 0, 0, 0);

    $fuente = 'arial.ttf';
    // Agregar el nombre del usuario a la imagen
    imagettftext($image, 20, 0, 100, 100, $textColor, $fuente, $nombre);

    // Generar la imagen en formato PNG y guardarla en la carpeta "images"
    $filename = 'images/' . uniqid() . '.png';
    imagepng($image, $filename);
    imagedestroy($image);

    // Devolver la URL de la imagen generada
    $url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' . $filename;
    echo json_encode(array('url' => $url));
}