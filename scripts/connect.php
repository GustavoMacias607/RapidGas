<?php
require __DIR__ . '/vendor/autoload.php'; // Carga el autoload de Composer

use Dotenv\Dotenv;



// Carga las variables de entorno desde el archivo .env
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');
$db   = getenv('DB_NAME');
$clave_enc = getenv('CLAVE_ENC');

$conData = array(
	'host' => $host,
	'user' => $user,
	'pass' => $pass,
	'db'   => $db
);

// Incluye la clase Conexion
require_once 'Conexion.php';

// Crea la conexión usando los datos del .env
$conexion = new Conexion($conData);
$conn = $conexion->getConnection();

// Puedes probar la conexión con algo simple, por ejemplo:
if ($conn) {
	echo "¡Conexión exitosa!";
} else {
	echo "No se pudo conectar a la base de datos.";
}