<?php
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $usuarios = array_map('str_getcsv', file('usuarios.csv'));
    
    foreach ($usuarios as $usuario) {
        if ($usuario[0] === $username) {
            $error = "El usuario ya existe. Elige otro nombre de usuario.";
            break;
        }
    }

    if (!isset($error)) {
        $archivo = fopen('usuarios.csv', 'a');
        fputcsv($archivo, array($username, $password));
        fclose($archivo);

        header('Location: login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <?php if (isset($error)) { echo "<p style='color:red'>$error</p>"; } ?>
    <form method="post">
        Usuario: <input type="text" name="username" required><br>
        Contraseña: <input type="password" name="password" required><br>
        <input type="submit" name="register" value="Registrar">
    </form>
</body>
</html>
