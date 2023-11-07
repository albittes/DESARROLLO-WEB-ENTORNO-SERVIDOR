<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cuadernillo Rubio - Sumas</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <h1>Suma los siguientes números:</h1>
    <form action="verificar.php" method="post">
        <?php
        $numero1 = rand(1, 10);
        $numero2 = rand(1, 10);
        echo "<p>$numero1 + $numero2 = <input type='number' name='respuesta'></p>";
        echo "<input type='hidden' name='numero1' value='$numero1'>";
        echo "<input type='hidden' name='numero2' value='$numero2'>";
        ?>
        <input type="submit" value="Comprobar">
    </form>
</body>
</html>
