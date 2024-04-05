<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_marcação_de_consulta";

$mysqli = new mysqli($host, $user, $password, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
    exit();
}

$emailErro = "";
$senhaErro = "";

if (isset($_POST['email']) || isset($_POST['senha'])) {
  if (empty($_POST['email'])) {
    $emailErro = "Digite o seu email";
  } else if (empty($_POST['senha'])) {
    $senhaErro = "Digite a sua palavra-passe";
  } else {

    if ($mysqli && $mysqli->connect_errno === 0) {
      $email = $mysqli->real_escape_string($_POST['email']);
      $senha = $mysqli->real_escape_string($_POST['senha']);
    } else {
      echo "Falha ao conectar ao MySQL";
      exit();
    }

    $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $sql_query = <span class="math-inline">mysqli\-\>query\(</span>sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if($quantidade == 1) {

      $usuarios = $sql_query->fetch_assoc(); 

      if(!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $usuarios['id'];
      $_SESSION['nome'] = $usuarios['nome'];

      header("Location: painel.php");

    } else {
      echo "Falha ao entrar! E-mail ou Senha incorretos";
    }
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <form action="login.php" method="POST" class="login-container" id="login">
    <div class="top">
      <span>Não tem uma conta? <a href="#" onclick="register()">Inscreva-se</a></span>
      <header>Login</header>
    </div>
    <div class="input-box">
      <input type="text" class="input-field" placeholder="Digite o seu email" name="email" <?php echo $emailErro ? "autofocus" : ""; ?>>
      <i class="bx bx-user"></i>
      <span style="color: red;"><?php echo $emailErro; ?></span>
    </div>
    <div class="input-box">
      <input type="password" class="input-field" placeholder="Digite a tua palavra-passe" name="senha" <?php echo $senhaErro ? "autofocus" : ""; ?>>
      <i class="bx bx-lock-alt"></i>