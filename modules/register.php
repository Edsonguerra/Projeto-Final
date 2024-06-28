<?php
include_once('conexao.php');

$nome = $_POST['nome'];
$ultimo_nome = $_POST['ultimo_nome'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);

$result = mysqli_query($mysqli, "INSERT INTO user(nome,ultimo_nome,email,senha) VALUES ('$nome','$ultimo_nome','$email','$senha')");

if ($result) {

$mensagemCadastro = "";
} 
session_start();
$_SESSION['cadastro_msg'] = $mensagemCadastro;

header("Location: ../views/login.php");
?>