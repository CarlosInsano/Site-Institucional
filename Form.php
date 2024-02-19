<?php
// Inclua o arquivo de conexão
include_once 'conexao.php';

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $chamado = $_POST['chamado'];

    // Prepara a consulta SQL para inserção dos dados na tabela sys_chamados
    $stmt = $conn->prepare("INSERT INTO sys_chamado (nome, email, chamado) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $chamado);

    // Executa a consulta SQL
    if ($stmt->execute()) {
        // Resposta para indicar que o formulário foi processado com sucesso
        $response = array("status" => "success", "message" => "Formulário enviado com sucesso");
    } else {
        // Resposta de erro em caso de falha na execução da consulta SQL
        $response = array("status" => "error", "message" => "Erro ao enviar o formulário. Por favor, tente novamente.");
    }

    // Fecha a declaração preparada
    $stmt->close();
} else {
    // Se a requisição não for do tipo POST, retorna um erro
    $response = array("status" => "error", "message" => "Método não permitido");
}

// Envia a resposta de volta ao cliente
//header("Content-Type: application/json");
//echo json_encode($response);

// Fecha a conexão
$conn->close();


?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/site-institucional/css/form.css">
  <meta name="description" content="Desenvolvedor Web Carlos Augusto Ribeiro Chagas Filho">
  <title>Carlos Augusto R C Filho</title>
  
</head>
<body>
  
  <div class="background"></div>
  <a class="voltar" href="http://localhost/site-institucional/index.php"><button class="btn btn-outline-secondary">Voltar</button></a>
  <h1>Chamado</h1>
  <div class="formulario">
    <form id="formulario" method="post" action="">
      <label for="nome">Nome:</label><br>
      <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" required>
      <br>
      <label for="email">Email:</label><br>
      <input type="email" id="email" name="email" placeholder="Digite seu Email" required>
      <br>
      <label for="chamado">Qual seria sua solicitação?</label><br>
      <input type="" id="chamado" name="chamado" placeholder="Resuma em poucas palavras a sua Solicitação" required>
      <br>
      <input class="btn btn-success" type="submit" value="Enviar">
    </form>
  </div>

  <!-- Container para exibir mensagens de sucesso ou erro -->
  <div id="mensagem-container"></div>

  <p>CARCF®</p>
  
  <script src="/site-institucional/js/Form.js"></script>
  
</body>
</html>
