<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usr = $_POST['usr'];
    $pwd = $_POST['pwd'];

    $usuarios = fopen('usuarios.csv', 'r');
    while (($row = fgetcsv($usuarios)) !== false) {
        if ($row[0] === $usr && password_verify($pwd, $row[1])) {
            session_start();
            $_SESSION['usr'] = $usr;
            header('Location: chat.php');
            exit;
        }
    }
    fclose($usuarios);
    header('Location: login.php?error=1');
}
?>
