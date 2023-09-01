<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Conectar ao banco de dados (substitua com suas credenciais)
    $conn = new mysqli("localhost", "root", "", "newsletter");

    // Verificar a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Inserir os dados na tabela 'subscribers'
    $sql = "INSERT INTO subscritores (nome, email) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome, $email);

    if ($stmt->execute()) {
         header("Location: confirmacao.php");
        exit(); 
    } else {
        echo "Erro ao realizar a inscrição: " . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
}
?>