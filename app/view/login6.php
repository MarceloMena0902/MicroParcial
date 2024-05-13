<!DOCTYPE html>
<html lang="en">
<head>
 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuarios</title>
    <!-- Enlace al archivo de estilos CSS -->
    <link rel="stylesheet" href="../../public/css/login.css">
</head>
<body>
    <!-- Título de la página -->
    <div class="titulo">
        <h2>Ingreso de usuarios</h2>
    </div>
    <!-- Formulario de inicio de sesión -->
    <div class="form">
        <form action="../controller/UserController.php" method="POST">
            <!-- Campo oculto para indicar la acción a realizar -->
            <input type="hidden" name="action" value="login">
            <!-- Campo para ingresar el nombre de usuario -->
            <label for="">Nombre de Usuario:</label> 
            <input type="text" name="nombre" required placeholder="Ingresa tu nombre de Usuario"><br><br>
            <!-- Campo para ingresar la contraseña -->
            <label for="">Contraseña:</label> 
            <input type="password" name="password" placeholder="Ingresa tu contraseña" required><br><br>
            <!-- Botón para enviar el formulario -->
            <input class="boton" type="submit" value="Ingresar">
        </form>
        <!-- Enlace para registrarse si no tiene una cuenta -->
        <p><a href="registro6.php">¿No estás registrado? Regístrate aquí</a></p>
    </div>
</body>
</html>