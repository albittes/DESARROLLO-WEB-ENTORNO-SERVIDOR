<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h1>Iniciar Sesión</h1>
    <form method="post" action="verificar_login.php">
        <label for="usr">Nombre de Usuario:</label>
        <input type="text" name="usr" required><br>
        <label for="pwd">Contraseña:</label>
        <input type="password" name="pwd" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
