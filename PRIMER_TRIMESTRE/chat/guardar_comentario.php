<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_SESSION['usr'])) {
    $comentarios = fopen('comentarios.csv', 'a+');
    $comentario = $_POST['comentario'];
    $usuario = $_SESSION['usr'];
    $fecha = date('Y-m-d H:i:s');
    fputcsv($comentarios, [$usuario, $comentario, $fecha]);
    fclose($comentarios);
    header('Location: chat.php');
    exit;
}
?>
