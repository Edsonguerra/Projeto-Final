<?php
include('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        header("Location: ../views/login.php?error=Preencha todos os campos.");
        exit();
    } else {
        if ($mysqli && $mysqli->connect_errno === 0) {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $_POST['senha']; // Não precisa escapar a senha
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

        $usuario = $email_check_result->fetch_assoc();

        // Verificação da senha usando password_verify
        if (password_verify($senha, $usuario['senha'])) {
            $administrador = $usuario['administrador'] == 1;

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_user'] = $usuario['id_user'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];

            header("Location: ../views/dashboard.php"); // Direcionando para o dashboard ou página principal
            exit();
        } else {
            header("Location: ../views/login.php?error=Senha incorreta");
            exit();
        }
    }
}
?>
