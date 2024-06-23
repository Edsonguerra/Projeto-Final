<?php
session_start();
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


    $email_check_query = "SELECT * FROM funcionario WHERE email = '$email' LIMIT 1";
    $email_check_result = $mysqli->query($email_check_query) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($email_check_result->num_rows === 0) {
      header("Location: ../views/login.php?error=Email incorreto");
      exit();
    }

    $sql_code = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha' LIMIT 1";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($sql_query->num_rows === 1) {
      $funcionario = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

 
      $_SESSION['id_funcionario'] = $funcionario['id_funcionario'];
      $_SESSION['nome'] = $funcionario['nome'];
      $_SESSION['email'] = $funcionario['email'];


      header("Location: ../views/login_funcionario.php?success=");
      exit();
    } else {

      header("Location: ../views/login_funcionario.php?error=Senha incorreta");
      exit();
    }
  }
}
?>
