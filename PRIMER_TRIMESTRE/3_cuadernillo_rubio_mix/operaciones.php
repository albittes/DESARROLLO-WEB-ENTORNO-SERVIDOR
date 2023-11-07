<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Operación Matemática</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width,initial-scale=1" >
</head>
<body>
    <h1>Operación Matemática</h1>
    <form action="resultado.php" method="post">
        <?php
        // Generar números y operación aleatoria
        $numero1 = rand(1, 10);
        $numero2 = rand(1, 10);
        $operadores = array("+", "-", "*", "/");
        $operacion = $operadores[array_rand($operadores)];
            if ($operacion == '/') {
                // Si el operador es la división, genera dos números aleatorios
                $numero1 = rand(1, 10); // Numerador
                $numero2 = rand(1, 10); // Denominador
                // Asegúrate de que el denominador no sea cero
                while ($numero2 == 0) {
                    $numero2 = rand(1, 10);
                }
                $resultado = $numero1 / $numero2; // Calcula el resultado decimal
            } else {
                // Para otros operadores, genera dos números enteros aleatorios
                $numero1 = rand(1, 10);
                $numero2 = rand(1, 10);
                // Realiza la operación
                if ($operacion == '+') {
                    $resultado = $numero1 + $numero2;
                } elseif ($operacion == '-') {
                    $resultado = $numero1 - $numero2;
                } elseif ($operacion == '*') {
                    $resultado = $numero1 * $numero2;
                }
            }
        // Almacenar los valores en campos ocultos
        echo "<input type='hidden' name='numero1' value='$numero1'>";
        echo "<input type='hidden' name='numero2' value='$numero2'>";
        echo "<input type='hidden' name='operacion' value='$operacion'>";
        
        // Mostrar la operación al usuario
        echo "<p>$numero1 $operacion $numero2 = <input type='tel' name='respuesta' required></p>";
        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>
