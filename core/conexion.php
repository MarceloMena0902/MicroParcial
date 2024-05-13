<?php
require_once(__DIR__ . '/../config/config.php');

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db", $username, $password);
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
?>