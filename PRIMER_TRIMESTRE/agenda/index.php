<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>Document</title>

</head>
<body>
    <form method="POST">
            <label for="nombre">Nombre : </label>
            <input type="text" id="nombre" name="nombre" required></input> <br><br>

            <label for="apellido">Apellido : </label>
            <input type="text" id="apellido" name="apellido" required></input> <br><br>

            <label for="telefono">Telefono : </label>
            <input type="tel" id="telefono" name="telefono" required></input> <br><br>

            <input type="submit" name ="agregar" value="agregar">    
    </form>

        <?php
            if(isset($_POST['agregar']))
            {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $telefono = $_POST['telefono'];

                $contacto = "$nombre,$apellido,$telefono\n";

                //AQUI AGRAGAMOS EL CONTACTO AL ARCHIVO CSV

                file_put_contents('contactos.csv', $contacto, FILE_APPEND);
            }
        ?>

        <h2>Contactos Guardados</h2>
            <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Teléfono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $contactos = file('contactos.csv');
                        foreach ($contactos as $contacto) {
                            list($nombre, $apellido, $telefono) = explode(',', $contacto);
                            echo "<tr>";
                            echo "<td>$nombre</td>";
                            echo "<td>$apellido</td>";
                            echo "<td>$telefono</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>

   
</body>
</html>