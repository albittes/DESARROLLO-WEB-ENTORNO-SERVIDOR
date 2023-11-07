<!DOCTYPE html>
<html>
<head>
    <style>
        /* Estilo inicial del texto */
        .color-change {
            transition: color 0.1s; /* Agrega una transición suave al cambio de color */
        }

        body
        {
            background-color: <?php echo getColor(); ?>;
        }
    </style>
</head>
<body>

        <p>holi holi</p>
    <?php
        //CREA UNA FUNCION LO CUAL ME DEVUELVE UN COLOR
        function getColor(){
            $red = rand(0, 255);
            $green = rand(0, 255);
            $blue = rand(0, 255);

            return "rgb($red,$green,$blue)";
        }

    ?>
</body>
</html>

