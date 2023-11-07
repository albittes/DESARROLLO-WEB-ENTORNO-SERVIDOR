<!DOCTYPE html>
<html>
<head>
    <title>Chat</title>
</head>
<body>
    <h1>Bienvenido al Chat</h1>
    <?php
    session_start();
    if (isset($_SESSION['usr'])) {
        echo '<p>Bienvenido, ' . $_SESSION['usr'] . '.</p>';
        echo '<form method="post" action="guardar_comentario.php">';
        echo '<label for="comentario">Escribe un comentario:</label>';
        echo '<input type="text" name="comentario" required>';
        echo '<input type="submit" value="Enviar">';
        echo '</form>';
        echo '<h2>Comentarios</h2>';
        // Aquí puedes leer y mostrar los comentarios almacenados en un archivo CSV.
    } else {
        header('Location: login.php');
        exit;
    }
    ?>
</body>
</html>
