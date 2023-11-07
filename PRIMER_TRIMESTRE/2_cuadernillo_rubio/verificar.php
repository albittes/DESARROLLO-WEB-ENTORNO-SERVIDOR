<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuadernillo Rubio - Verificación</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    if (isset($_POST['respuesta']) && isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $respuesta = $_POST['respuesta'];
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $resultado = $numero1 + $numero2;

        if ($respuesta == $resultado) {
            echo "<p>¡Respuesta correcta! $numero1 + $numero2 = $resultado</p>";
        } else {
            echo "<p>Respuesta incorrecta. $numero1 + $numero2 no es igual a $respuesta.</p>";
        }
    } else {
        echo "<p>Error: Debes completar el formulario.</p>";
    }
    ?>
    <a href="index.php">Volver al inicio</a>
</body>
</html>
