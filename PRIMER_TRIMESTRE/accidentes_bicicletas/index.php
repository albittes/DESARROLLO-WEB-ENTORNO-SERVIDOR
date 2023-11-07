<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Accidentes</title>
    <meta name=viewport content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Tabla de Accidentes</h1>

    <table border="1">
        <tr>
            <th>Fecha</th>
            <th>Lesividad</th>
            <th>Tipo de Vehículo</th>
        </tr>

        <?php
        $archivo = 'AccidentesBicicletas_2023.csv';

        if (($handle = fopen($archivo, 'r')) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ';')) !== FALSE) {
                $fecha = $data[1];
                $lesividad = $data[14];
                $tipo_vehiculo = $data[9];

                echo "<tr>";
                echo "<td>$fecha</td>";
                echo "<td>$lesividad</td>";
                echo "<td>$tipo_vehiculo</td>";
                echo "</tr>";
            }
            fclose($handle);
        }
        ?>
    </table>
</body>
</html>
