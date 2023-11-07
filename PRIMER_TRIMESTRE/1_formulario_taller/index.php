<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
</head>
<body>
    <h1>FORMULARIO TALLER</h1>
    <form action="procesar.php" method="post">
        <label for="nombreCliente">Nombre del cliente</label>
        <input type="text" id="nombreCliente" name="nombreCliente" required></input><br><br>

        <label for="matricula">Matrícula:</label>
        <input type="text" id="matricula" name="matricula" required><br><br>

        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="marca">Marca:</label>
        <select id="marca" name="marca">
            <option value="Marca1">SEAT</option>
            <option value="Marca2">MERCEDEZ</option>
            <option value="Marca3">FERRARI</option>
        </select><br><br>

        <label>¿Usa seguro?</label>
        <input type="radio" id="usaSeguroSi" name="usaSeguro" value="Si">
        <label for="usaSeguroSi">Sí</label>
        <input type="radio" id="usaSeguroNo" name="usaSeguro" value="No">
        <label for="usaSeguroNo">No</label><br><br>

        <label>Horas de llamada preferidas:</label><br>
        <input type="checkbox" id="manana" name="horasLlamada[]" value="Mañana">
        <label for="manana">Mañana</label><br>
        <input type="checkbox" id="tarde" name="horasLlamada[]" value="Tarde">
        <label for="tarde">Tarde</label><br>
        <input type="checkbox" id="noche" name="horasLlamada[]" value="Noche">
        <label for="noche">Noche</label><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>