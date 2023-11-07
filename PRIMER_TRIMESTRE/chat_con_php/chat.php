<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

if (isset($_POST['comentario']) && !empty($_POST['comentario'])) {
    $comentario = $_POST['comentario'];
    $fechaHora = date('Y-m-d H:i:s');
    $usuario = $_SESSION['username'];

    $archivo = fopen('comentarios.csv', 'a');
    fputcsv($archivo, array($usuario, $comentario, $fechaHora));
    fclose($archivo);
}

$comentarios = array_reverse(array_map('str_getcsv', file('comentarios.csv')));
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Chat</title>
</head>
<body>
    <h1>Chat</h1>
    <div id="comentarios">
        <?php foreach ($comentarios as $comentario) {
            list($usuario, $texto, $fechaHora) = $comentario;
            echo "<p><strong>$usuario</strong> ($fechaHora): $texto</p>";
        } ?>
    </div>
    <form method="post">
        <input type="text" name="comentario" placeholder="Escribe un comentario..." required>
        <input type="submit" value="Enviar">
    </form>
    <p><a href="login.php">Cerrar sesión</a></p>
</body>
</html>