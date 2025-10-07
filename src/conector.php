<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'root'; 
$db   = 'aula_php';

$con = mysqli_connect($host, $user, $pass, $db);

if (!$con) {
  die('Falha na conexão: ' . mysqli_connect_error());
}

// opcional: charset
mysqli_set_charset($con, 'utf8mb4');

?>