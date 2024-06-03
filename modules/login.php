<?php
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header("Location: ../views/login.php?error=Preencha todos os campos.");
        exit();
    } else {
        if ($mysqli && $mysqli->connect_errno === 0) {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
        } else {
            echo "Falha ao conectar ao MySQL";
            exit();
        }


        $email_check_query = "SELECT * FROM user WHERE email = '$email' LIMIT 1";
        $email_check_result = $mysqli->query($email_check_query) or die("Falha na execução do código SQL: " . $mysqli->error);
        if ($email_check_result->num_rows === 0) {

            header("Location: ../views/login.php?error=Email incorreto");
            exit();
        }


        $sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha' LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade !== 0) {
            $usuarios = $sql_query->fetch_assoc();

            $administrador = $usuarios['administrador'] == 1; 

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_user'] = $usuarios['id_user'];
            $_SESSION['nome'] = $usuarios['nome'];
            $_SESSION['email'] = $usuarios['email'];

            if ($administrador) {
                header("Location: ../views/Gestão.php");  
            } else {
                header("Location: ../views/painel.php"); 
            }
        } else {
            header("Location: ../views/login.php?error=Senha incorreta");
        }
    }
}
?>