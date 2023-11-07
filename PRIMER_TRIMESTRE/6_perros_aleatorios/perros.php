<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagen de Perro Aleatoria</title>
</head>
<body>
    <h1>Imagen de Perro Aleatoria</h1>
    
    <?php
    // Realizar una solicitud a la API para obtener una imagen de perro aleatoria
    $url = "https://dog.ceo/api/breeds/image/random";
    $data = file_get_contents($url);

    // Decodificar la respuesta JSON
    $response = json_decode($data, true);

    if ($response && $response['status'] === 'success') {
        $imageUrl = $response['message'];
        echo "<img src='$imageUrl' alt='Perro Aleatorio'>";
    } else {
        echo "No se pudo obtener una imagen de perro aleatoria en este momento.";
    }
    ?>
</body>
</html>
