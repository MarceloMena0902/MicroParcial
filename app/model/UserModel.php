<?php
// Incluye el archivo de conexión
require_once('../../core/conexion.php');

class UsuarioModel {
    // Función para iniciar sesión de usuario
    public function login($nombre, $password) {
        global $conexion;      
        // Consulta SQL para buscar un usuario por su nombre y contraseña
        $sql = "SELECT * FROM usuario WHERE nombre=:nombre AND password=:password";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':password',$password);
        $stmt->execute();        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);    
    }

    // Función para registrar un nuevo usuario
    public function registrar($nombre, $email, $password) {
        global $conexion;
        // Encripta la contraseña antes de almacenarla en la base de datos
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // Consulta SQL para insertar un nuevo usuario en la base de datos
        $sql = "INSERT INTO usuario (nombre, email, password) VALUES (:nombre, :email, :password)";
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hashed_password);
        // Devuelve true si se ejecuta la consulta con éxito
        return $stmt->execute();
    }
}
?>