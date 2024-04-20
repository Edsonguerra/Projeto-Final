<?php
include_once('conexao.php');
    $nome = $_POST['nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
  
    $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,ultimo_nome,email,senha) VALUES ('$nome','$ultimo_nome','$email','$senha')"); 
    header("Location: ../views/login.php");
?>