<?php
$contactos = [
    ["nombre" => "Juan", "telefono" => "123-456-7890"],
    ["nombre" => "Maria", "telefono" => "987-654-3210"],
    ["nombre" => "Pedro", "telefono" => "555-555-5555"]
];

header("Content-Type: application/json");
echo json_encode($contactos);
?>
