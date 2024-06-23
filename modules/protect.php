<?php
include('conexao.php');

if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id_user']) && !isset($_SESSION['id_funcionario'])) {
    die("Você não pode acessar essa página porque não estás logado. <p><a href=\"../views/login.php\">Entrar</a></p>");
}
?>

