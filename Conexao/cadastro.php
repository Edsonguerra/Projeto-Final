<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];

// Conectar ao banco de dados
$db = mysqli_connect("localhost", "root", "", "mydb");

// Salvar dados no banco de dados
$query = "INSERT INTO users (nome, email, senha, data_nascimento, cpf) VALUES ('$nome', '$email', '$senha', '$data_nascimento', '$cpf')";
mysqli_query($db, $query);

// Redirecionar para a página de sucesso
header("Location: https://www.exemplo.com/sucesso.html");

?>