<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuarios = array_map('str_getcsv', file('usuarios.csv'));
    
    foreach ($usuarios as $usuario) {
        if ($usuario[0] === $username && $usuario[1] === $password) {
            $_SESSION['username'] = $username;
            header('Location: chat.php');
            exit();
        }
    }

    $error = "Nombre de usuario o contraseña incorrecta.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <?php if (isset($error)) { echo "<p style='color:red'>$error</p>"; } ?>
    <form method="post">
        Usuario: <input type="text" name="username"><br>
        Contraseña: <input type="password" name="password"><br>
        <input type="submit" name="login" value="Iniciar Sesión">
    </form>
    <p><a href="register.php">¿No tienes una cuenta? Regístrate aquí.</a></p>
</body>
</html>
