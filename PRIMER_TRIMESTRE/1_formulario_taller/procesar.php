<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Datos del taller</h1>
    <table class="borde_tabla">
        <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Matrícula</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>Marca</th>
                    <th>Usa Seguro</th>
                    <th>Horas de Llamada</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_POST['nombreCliente']; ?></td>
                    <td><?php echo $_POST['matricula']; ?></td>
                    <td><?php echo $_POST['telefono']; ?></td>
                    <td><?php echo $_POST['email']; ?></td>
                    <td><?php echo $_POST['marca']; ?></td>
                    <td><?php echo isset($_POST['usaSeguro']) ? $_POST['usaSeguro'] : 'No especificado'; ?></td>
                    <td><?php echo isset($_POST['horasLlamada']) ? implode(', ', $_POST['horasLlamada']) : 'No especificado'; ?></td>
                </tr>
        </tbody>
    </table>

</body>
</html>