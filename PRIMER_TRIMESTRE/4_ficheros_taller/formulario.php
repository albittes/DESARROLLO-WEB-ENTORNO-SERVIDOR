<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Nombre</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body>
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recopilar los datos del formulario
        $nombre = $_POST['nombre'];
        $matricula = $_POST['matricula'];
        $telefono = $_POST['telefono'];
        $email = $_POST['email'];
        $marca = $_POST['marca'];
        $usaSeguro = $_POST['usaSeguro'];
        $horario = isset($_POST['horario']) ? implode(", ", $_POST['horario']) : '';

        // Almacenar los datos en una variable de sesión
        $_SESSION['datos'][] = array($nombre, $matricula, $telefono, $email, $marca, $usaSeguro, $horario);

        // Guardar los datos en un archivo CSV
        $csvFile = fopen("contactos.csv", "a");
        fputcsv($csvFile, array($nombre, $matricula, $telefono, $email, $marca, $usaSeguro, $horario));
        fclose($csvFile);
    }
    ?>

    <form action="formulario.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required> <br>

        <label for="matricula">Matrícula: </label>
        <input type="text" id="matricula" name="matricula" required> <br>

        <label for="telefono">Teléfono: </label>
        <input type="tel" id="telefono" name="telefono" required> <br>

        <label for="email">Correo electrónico: </label>
        <input type="email" id="email" name="email" required> <br>

        <label for="marca">Marca: </label> 
        <select id="marca" name="marca"> 
            <option value="SEAT">SEAT</option>
            <option value="CITROEN">CITROEN</option>
            <option value="MERCEDES">MERCEDES</option>
        </select> <br>

        <label for="usaSeguro">¿Usa seguro mi rey?</label>
        <label><input type="radio" id="usaSeguroSi" name="usaSeguro" value="Si">Si</label>
        <label><input type="radio" id="usaSeguroNo" name="usaSeguro" value="No">No</label> <br><br>

        <label>Horario de llamada:</label>
        <label><input type="checkbox" id="manana" name="horario[]" value="mañana">Mañana</label>
        <label><input type="checkbox" id="tarde" name="horario[]" value="tarde">Tarde</label>
        <label><input type="checkbox" id="noche" name="horario[]" value="noche">Noche</label> <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
