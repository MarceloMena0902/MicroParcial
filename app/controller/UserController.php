<?php
require_once('../model/UserModel.php');

class UsuarioController {
    // Función para iniciar sesión de usuario
    public function login($nombre, $password) {
        // Genera un hash de la contraseña ingresada
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $model = new UsuarioModel();
        // Busca al usuario en la base de datos y verifica si la contraseña es válida
        $usuario = $model->login($nombre, $password);
        if (password_verify($password, $hashed_password)) {    
            // Inicia la sesión y redirige al usuario a la página de bienvenida si la contraseña es válida
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("Location: ../view/welcome.php");
            echo '¡La contraseña es válida!'; 
        } else { 
            // Muestra un mensaje de error si la contraseña no es válida y redirige al usuario a la página de inicio de sesión
            echo 'La contraseña no es válida.'; 
            header("refresh:;url=../view/login6.php");
        }
    }

    // Función para registrar un nuevo usuario
    public function registrar($nombre, $email, $password, $confirm_password) {
        // Verifica si las contraseñas coinciden
        if ($password != $confirm_password) {
            echo "Las contraseñas no coinciden.";
            header("refresh:1;url=../view/registro6.php");
            exit();
        }

        $model = new UsuarioModel();
        // Genera un hash de la contraseña antes de registrar al nuevo usuario
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        if ($model->registrar($nombre, $email, $hashed_password)) {
            echo "Usuario registrado exitosamente.";          
            header("refresh:1;url=../view/login6.php");
        } else {
            echo "Error al registrar usuario.";
        }
    }
}

// Inicia la sesión
session_start();

// Verifica si se ha enviado una acción a través del formulario
if (isset($_POST['action'])) {
    require_once('UserController.php');
    $controller = new UsuarioController();

    // Llama a la función correspondiente según la acción recibida
    if ($_POST['action'] === 'login') {
        $controller->login($_POST['nombre'], $_POST['password']);
    } elseif ($_POST['action'] === 'registrar') {
        $controller->registrar($_POST['nombre'], $_POST['email'], $_POST['password'], $_POST['confirm_password']);
    }
}
?>