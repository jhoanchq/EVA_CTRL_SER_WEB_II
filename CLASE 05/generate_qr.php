<?php

require_once 'phpqrcode/qrlib.php';

if (isset($_POST['nombre'])) {
  $nombre = $_POST['nombre'];
  
  // Generar código QR
  $tamanio = 10; // Tamaño de la imagen
  $level = 'M'; // Nivel de corrección de errores (L, M, Q, H)
  $archivo = 'qr_codes/'.uniqid() .'.png'; // Nombre del archivo generado
  QRcode::png($nombre, $archivo, $level, $tamanio);
  
  // Devolver URL del archivo generado
  $url = $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/' .$archivo;
  echo json_encode(array('url' => $url));
}