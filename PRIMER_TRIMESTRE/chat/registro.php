<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="guardar_usuario.php">
        <label for="usr">Nombre de Usuario:</label>
        <input type="text" name="usr" required><br>
        <label for="pwd">Contraseña:</label>
        <input type="password" name="pwd" required><br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>
