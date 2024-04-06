<?php

// Conexão ao banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "site_marcação_de_consulta";

$mysqli = new mysqli($host, $user, $password, $database);

// Validação de entrada
if (isset($_POST['submit'])) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $ultimo_nome = filter_input(INPUT_POST, 'ultimo_nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    // Validação adicional de acordo com suas necessidades

    // Prevenção de SQL Injection
    $stmt = $mysqli->prepare("INSERT INTO usuarios(nome, ultimo_nome, email, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $ultimo_nome, $email, $senha);
    $stmt->execute();

    // Armazenamento seguro de senhas
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Redirecionamento
    header("Location: index.html");
}

?>