<!DOCTYPE html>
<html>
<head>
    <title>Selección de Prioridad</title>
</head>
<body>
    <h1>Selecciona la prioridad:</h1> <!--ESTO ES FACIL DE AÑO PASADO-->
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="id_frase">seleciona</label>
        <select id="id_frase" name="prioridad">
            <option value="poco_urgente">Poco urgente</option>
            <option value="urgente">Urgente</option>
            <option value="muy_urgente">Muy urgente</option>
        </select>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $prioridad = $_POST["prioridad"];
        $color = "";

        switch ($prioridad) {
            case "poco_urgente":
                $color = "green";
                break;
            case "urgente":
                $color = "yellow";
                break;
            case "muy_urgente":
                $color = "red";
                break;
            default:
                $color = "pink"; // Color de fondo predeterminado
        }

        echo "<style>body { background-color: $color; }</style>";
    }
    ?>
</body>
</html>
