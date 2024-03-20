<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data_nascimento = $_POST['data_nascimento'];
$cpf = $_POST['cpf'];


$db = mysqli_connect("localhost", "root", "", "mydb");


$query = "INSERT INTO users (nome, email, senha, data_nascimento, cpf) VALUES ('$nome', '$email', '$senha', '$data_nascimento', '$cpf')";
mysqli_query($db, $query);


header("Location: https://www.exemplo.com/sucesso.html");

?>