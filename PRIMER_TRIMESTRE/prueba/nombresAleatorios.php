<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /*estilo inicial del texto*/
        .text-change
        {
            transition: color 0.1s; /*ESTO ES PARA AGREGAR UNA TRANSICION SUAVE*/
            font-size: 50px;
        }
    </style>
</head>
<body>
    <?php
        // ARRAY DE NOMBRES ALEATORIOS
        $nombres = ['HOLA','tito','TITO'];

        // NOMBRE ALEATORIO
        $randomNombre = $nombres[array_rand($nombres)];
        
        //IMPRIME EL PARRAFO CON EL NOMBRE ALEATORIO
        echo "<p class=\"text-change\">$randomNombre</p>"
    ?>
</body>
</html>