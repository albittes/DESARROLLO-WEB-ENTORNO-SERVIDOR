<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarios = fopen('usuarios.csv', 'a+');
    $usr = $_POST['usr'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
    fputcsv($usuarios, [$usr, $pwd]);
    fclose($usuarios);
    header('Location: login.php');
    exit;
}
?>
