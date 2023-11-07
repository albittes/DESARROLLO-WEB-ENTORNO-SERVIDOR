<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Matrícula</th>
            <th>Teléfono</th>
            <th>Correo electrónico</th>
            <th>Marca</th>
            <th>Usa seguro</th>
            <th>Horario de llamada</th>
        </tr>
        
        <?php
        $csvData = file_get_contents("contactos.csv");
        $csvRows = explode("\n", $csvData);
        
        foreach ($csvRows as $csvRow) {
            $csvValues = str_getcsv($csvRow);
            echo "<tr>";
            foreach ($csvValues as $csvValue) {
                echo "<td>$csvValue</td>";
            }
            echo "</tr>";
        }
        ?>
        
    </table>
</body>
</html>
