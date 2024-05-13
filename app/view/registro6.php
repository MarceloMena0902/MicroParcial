<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuarios</title> 

    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="../../public/css/registro.css">
</head>
<body>
    <!-- Título de la página -->
    <div class="titulo">
        <h2>Registro de usuario</h2>
    </div>
    <!-- Formulario de registro de usuario -->
    <div class="form">
        <form action="../controller/UserController.php" method="POST">
            <!-- Campo oculto para indicar la acción a realizar -->
            <input type="hidden" name="action" value="registrar">
            <!-- Campo para ingresar el nombre -->
            <label for="">Nombre:</label> 
            <input type="text" name="nombre" required><br><br>
            <!-- Campo para ingresar el correo electrónico -->
            <label for="">Email:</label> 
            <input type="email" name="email" required><br><br>
            <!-- Campo para ingresar la contraseña -->
            <label for="">Contraseña:</label> 
            <input type="password" name="password" required><br><br>
            <!-- Campo para confirmar la contraseña -->
            <label for="">Confirmar Contraseña:</label> 
            <input type="password" name="confirm_password" required><br><br>
            <!-- Botón para enviar el formulario -->
            <input class="boton" type="submit" value="Registrarse">
        </form>
        <!-- Enlace para iniciar sesión si ya tiene una cuenta -->
        <p><a href="login6.php">Ya tienes una cuenta? Iniciar Sesión</a></p>
    </div>
</body>
</html>