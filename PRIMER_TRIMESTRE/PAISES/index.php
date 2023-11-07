<!DOCTYPE html>
<html>
<head>
    <title>Información de Países</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
</head>
<body>
    <h1>Información de Países</h1>

    <table border="1">
        <tr>
            <th>Nombre del País</th>
            <th>Capital</th>
            <th>Enlace a Google Maps</th>
        </tr>

        <?php
        // Decodifica el JSON local desde el archivo "datos.json"
        $data = file_get_contents('datos.json');
        $countries = json_decode($data, true); // El segundo argumento como 'true' convierte el JSON en un array asociativo.

        foreach ($countries as $country) {
            $countryName = $country['name']['common'];
            $capital = $country['capital'][0];
            $googleMapsLink = 'https://www.google.com/maps/place/' . urlencode($capital); // Añade urlencode para manejar espacios u otros caracteres especiales en la URL.
        ?>

        <tr>
            <td><?php echo $countryName; ?></td>
            <td><?php echo $capital; ?></td>
            <td><a href="<?php echo $googleMapsLink; ?>" target="_blank">Ver en Google Maps</a></td>
        </tr>

        <?php } ?>
    </table>
</body>
</html>
