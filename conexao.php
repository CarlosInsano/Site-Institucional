<?php
// Configurações de conexão com o banco de dados
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "carcf";

// Conexão com o banco de dados MySQL usando MySQLi
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);
// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}
?>


