<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_marcação_de_consulta";


if(isset($_POST['submit'])){
    print_r('Nome: ' . $_POST['nome']);
    print_r('<br>');
    print_r('Ultimo nome: ' . $_POST['ultimo_nome']);
    print_r('<br>');
    print_r('Email: ' . $_POST['email']);
    print_r('<br>');
    print_r('Senha: ' . $_POST['senha']);
}

    include_once('conexão.php');

    $nome = $_POST['nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,ultimo_nome,email,senha) VALUES ('$nome','$ultimo_nome','$email','$senha')"); 

    header("Location: index.php");

?>