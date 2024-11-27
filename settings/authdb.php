<?php

$user = 'root';
$pass = '';
$db = 'db';
$server = 'localhost';

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->error) {
    die("[-] Erro ao conectar-se ao banco de dados: " . $conn->error);
    exit();
}