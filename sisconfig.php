<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'sislogin');

// Cria uma conexão com o banco de dados
$conn = new mysqli(HOST, USER, PASS, BASE);

// Verifica se houve um erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
?>






