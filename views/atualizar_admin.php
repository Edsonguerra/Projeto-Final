<?php
include('../modules/conexao.php');
include('../modules/protect.php');

$id_user = $_GET['updateid'];

if (isset($_POST['submit'])) {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $administrador = true;

  $stmt = $mysqli->prepare("UPDATE `user` SET nome=?, email=?, senha=?, administrador=? WHERE id_user=?");
  $stmt->bind_param('sssss', $nome, $email, $senha, $administrador, $id_user);

  if ($stmt->execute()) {
    echo "Dados atualizados com sucesso!";
  } else {
    echo "Erro ao atualizar dados: " . mysqli_error($mysqli);
  }
  $stmt->close();

  header("Location: Administradores.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Atualizar_admin.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="Administradores.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form method="POST">
                    <h5 class="titulo">Atualizar</h5>

                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Digite o nome do administrador">
                        <label for="nome" class="nome_da_consulta">Nome do administrador</label>
                    </div>

                <div class="input-box">
                    <input type="text" name="email" class="input_area" required placeholder="Digite o seu email">
                    <label class="email-edit">Email</label>
                </div>

                <div class="input-box">
                    <input type="text" name="senha" class="input_senha" required placeholder="Crie uma senha">
                    <label class="senha">Senha</label>
                </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Atualizar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>