<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Hashing da senha antes de armazenar no banco de dados
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserção no banco de dados
    $result = mysqli_query($mysqli, "INSERT INTO user (nome, ultimo_nome, email, senha) VALUES ('$nome', '$ultimo_nome', '$email', '$senha_hash')");

    if ($result) {
        $mensagemCadastro = "Cadastro realizado com sucesso.";
    } else {
        $mensagemCadastro = "Erro ao cadastrar usuário.";
    }

    session_start();
    $_SESSION['cadastro_msg'] = $mensagemCadastro;

    header("Location: ../views/login.php");
    exit();
}
?>
