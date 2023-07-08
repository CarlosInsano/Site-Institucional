<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
// Obter os dados enviados pelo formulário
$nome = $_POST['nome'];
$email = $_POST['email'];

// Verificar se os campos foram preenchidos
if (!empty($nome) && !empty($email)) {
    // Conectar ao banco de dados
    $servername = "localhost";
    $username = "Root";
    $password = "";
    $dbname = "bdusuarios";

    $conn = new mysqli($servername,$username,$password,$dbname);

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Preparar os dados para inserção no banco de dados
    $nome = mysqli_real_escape_string($conn, $nome);
    $email = mysqli_real_escape_string($conn, $email);

    // Inserir os dados no banco de dados
    $sql = "INSERT INTO tabela (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fechar a conexão com o banco de dados
    $conn->close();
} else {
    echo "Por favor, preencha todos os campos!";
}
?>

