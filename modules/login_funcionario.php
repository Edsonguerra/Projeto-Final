<?php
include('conexao.php');
session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
  if (empty($_POST['email']) || empty($_POST['senha'])) {
    header("Location: ../views/login_funcionario.php?error=Preencha todos os campos.");
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
      header("Location: ../views/login_funcionario.php?error=Email incorreto");
      exit();
    }

    $sql_code = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha' LIMIT 1";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    if ($sql_query->num_rows === 1) {
      $funcionario = $sql_query->fetch_assoc();
      if (!isset($_SESSION)) {
        session_start();
      }
      $funcionarioId=$funcionario['id_funcionario'];

      $_SESSION['id_funcionario'] = $funcionario['id_funcionario'];
      $_SESSION['nome'] = $funcionario['nome'];
      $_SESSION['email'] = $funcionario['email'];

      //Checking if the Funcionario s Doctor....
      $sql_funcionario_doctor = "SELECT * FROM doctor WHERE funcionario_id =$funcionarioId LIMIT 1";
      $sql_query_result = $mysqli->query($sql_funcionario_doctor) or die("Falha na execução do código SQL: " . $mysqli->error);

      if($sql_query_result->num_rows===1){
        $_SESSION['doctor']=true;
      }else{
        $_SESSION['funcionario']=true;
      }

      // End Checking..........
      header("Location: ../views/login_funcionario.php?success=");
      exit();
    } else {

      header("Location: ../views/login_funcionario.php?error=Senha incorreta");
      exit();
    }
  }
}
?>
