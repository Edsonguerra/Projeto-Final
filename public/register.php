<?php
$host = "localhost";
$user = "root";
$password = "";
$bancodedados = "site_marcação_de_consulta";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $mysqli = new mysqli($host, $user, $password, $bancodedados);
    if ($mysqli->connect_errno) {
        echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
        exit();
    }

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        $usuarios = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }

        $_SESSION['id'] = $usuarios['id'];
        $_SESSION['nome'] = $usuarios['nome'];

        header("Location: painel.php");
        exit();
    } else {
        echo "<script>exibirMensagemErro('Falha ao entrar! E-mail ou Senha incorretos');</script>";
    }
}
?>