<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Función para obtener productos de una categoría específica
    function obtenerProductos($categoria) {
        // Leer el archivo CSV y obtener los productos de la categoría
        $productos = [];
        if (($handle = fopen('productos.csv', 'r')) !== false) {
            while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                if ($data[0] === $categoria) {
                    $productos[] = ['talla' => $data[1], 'color' => $data[2]];
                }
            }
            fclose($handle);
        }
        return $productos;
    }
    
    // Comprobar si se ha hecho clic en el botón de eliminar cookie
    if (isset($_POST['eliminar_cookie'])) {
        // Eliminar la cookie estableciendo una fecha de caducidad en el pasado
        setcookie('categoria', '', time() - 3600); // Cookie expirada
    }
    
    // Comprobar si ya existe una cookie
    if (isset($_COOKIE['categoria'])) {
        $categoriaElegida = $_COOKIE['categoria'];
        $productos = obtenerProductos($categoriaElegida);
    } else {
        // Si no hay cookie, mostrar un formulario para elegir la categoría
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['categoria'])) {
            $categoriaElegida = $_POST['categoria'];
            setcookie('categoria', $categoriaElegida, time() + 3600 * 24 * 7); // Cookie válida por una semana
            $productos = obtenerProductos($categoriaElegida);
        } else {
            // Mostrar formulario de elección de categoría
            echo '<form method="post">';
            echo '<label for="categoria">Elige una categoría:</label>';
            echo '<select name="categoria" id="categoria">';
            echo '<option value="camisetas">Camisetas</option>';
            echo '<option value="pantalones">Pantalones</option>';
            echo '</select>';
            echo '<input type="submit" value="Elegir">';
            echo '</form>';
        }
    }
    
    // Mostrar los productos
    if (isset($productos)) {
        echo '<h1>Productos de la categoría: ' . $categoriaElegida . '</h1>';
        echo '<ul>';
        foreach ($productos as $producto) {
            echo '<li>Talla: ' . $producto['talla'] . ', Color: ' . $producto['color'] . '</li>';
        }
        echo '</ul>';
        // Agregar un botón para eliminar la cookie
        echo '<form method="post">';
        echo '<input type="submit" name="eliminar_cookie" value="Eliminar Cookie">';
        echo '</form>';
    }
    
    
    ?>
    
</body>
</html>