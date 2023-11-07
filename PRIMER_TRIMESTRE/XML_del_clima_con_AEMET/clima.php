<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['municipio'])) {
        $municipio = $_GET['municipio'];
        $apiKey = 'TU_API_KEY'; // Reemplaza 'TU_API_KEY' con tu clave de API de AEMET

        // Realiza una solicitud a la API de AEMET
        $url = "https://opendata.aemet.es/opendata/api/prediccion/especifica/municipio/diaria/$municipio";
        $context = stream_context_create([
            'http' => [
                'header' => "api_key: $apiKey"
            ]
        ]);
        $response = file_get_contents($url, false, $context);

        if ($response !== false) {
            $data = json_decode($response);
            $dataURL = $data->datos;

            // Realiza una nueva solicitud para obtener los datos XML
            $xmlData = file_get_contents($dataURL);

            if ($xmlData !== false) {
                $xml = new SimpleXMLElement($xmlData);
                $clima = $xml->prediccion->dia;

                // Muestra los datos en una tabla
                echo '<h2>Información del clima para ' . $municipio . '</h2>';
                echo '<table>';
                echo '<tr><th>Fecha</th><th>Temperatura Mínima (ºC)</th><th>Temperatura Máxima (ºC)</th></tr>';
                foreach ($clima as $dia) {
                    echo '<tr>';
                    echo '<td>' . $dia['fecha'] . '</td>';
                    echo '<td>' . $dia->temperatura['minima'] . 'ºC</td>';
                    echo '<td>' . $dia->temperatura['maxima'] . 'ºC</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo 'Error al obtener datos XML del clima';
            }
        } else {
            echo 'Error al obtener la URL de datos del clima';
        }
    }
    ?>

</body>
</html>