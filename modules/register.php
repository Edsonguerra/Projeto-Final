<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$ultimo_nome = $_POST['ultimo_nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$result = mysqli_query($mysqli, "INSERT INTO user (nome,ultimo_nome,email,senha) VALUES ('$nome','$ultimo_nome','$email','$senha')");

if ($result) {

$mensagemCadastro = "Cadastro realizado com sucesso!";
} else {

$mensagemCadastro = "Erro ao registrar usuário. Por favor, tente novamente.";
}
session_start();
$_SESSION['cadastro_msg'] = $mensagemCadastro;

header("Location: ../views/login.php");
?>