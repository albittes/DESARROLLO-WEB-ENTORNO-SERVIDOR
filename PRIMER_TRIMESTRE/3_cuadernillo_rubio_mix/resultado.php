<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" >
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php
    if (isset($_POST['respuesta'], $_POST['numero1'], $_POST['numero2'], $_POST['operacion'])) {
        $respuesta = $_POST['respuesta'];
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];

        // Realizar la operación según el operador
        switch ($operacion) {
            case '+':
                $resultado = $numero1 + $numero2;
                break;
            case '-':
                $resultado = $numero1 - $numero2;
                break;
            case '*':
                $resultado = $numero1 * $numero2;
                break;
            case '/':
                $resultado = $numero1 / $numero2;
                break;
            default:
                echo "<p>Operación no válida.</p>";
                exit;
        }

        // Comprobar la respuesta
        if ($respuesta == $resultado) {
            echo "<p>¡Respuesta correcta! $numero1 $operacion $numero2 = $resultado</p>";
        } else {
            echo "<p>Respuesta incorrecta. $numero1 $operacion $numero2 no es igual a $respuesta.</p>";
        }
    } else {
        echo "<p>Error: Debes completar el formulario.</p>";
    }
    ?>

    <a href="operaciones.php">Volver al inicio</a>
</body>
</html>
