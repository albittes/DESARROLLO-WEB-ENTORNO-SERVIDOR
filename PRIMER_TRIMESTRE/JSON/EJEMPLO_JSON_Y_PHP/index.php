<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Lee el contenido del archivo JSON
    $jsonData = file_get_contents('prueba.json');

    // Analiza el contenido JSON en un objeto PHP
    $data = json_decode($jsonData);

    // Accede a los datos
    $nombre = $data->nombre;
    $edad = $data->edad;
    $ciudad = $data->ciudad;
    $hobbies = $data->hobbies;

    // Imprime los datos
    echo "Nombre: $nombre<br>";
    echo "Edad: $edad<br>";
    echo "Ciudad: $ciudad<br>";
    echo "Hobbies:<ul>";
    foreach ($hobbies as $hobby) {
        echo "<li>$hobby</li>";
    }
    echo "</ul>";
    ?>

</body>
</html>