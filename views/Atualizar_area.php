<?php
include('../modules/conexao.php');
include('../modules/protect.php');

if (isset($_GET['updateid']) && is_numeric($_GET['updateid'])) {
  $id = $_GET['updateid'];

  if (isset($_POST['submit'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']); 

    $stmt = mysqli_prepare($mysqli, "UPDATE area SET nome = ? WHERE id = ?");
    if (!$stmt) {
        echo "Erro ao preparar a declaração: " . mysqli_error($mysqli);
        exit;
    }

    mysqli_stmt_bind_param($stmt, "si", $nome, $id);

    if (mysqli_stmt_execute($stmt)) {
      echo "Dados atualizados com sucesso!";
      header("Location: Area.php");
    } 
    mysqli_stmt_close($stmt);
  }
} else {

  echo "ID da area inválido";
  exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Atualizar_area.css">
    <title>Document</title>
</head>
<body>
    <div class="area">
        <div class="detalhes">
            <div class="img-formulario-analise">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                
                <a href="Area.php">
                    <button class="voltar">Voltar</button>
                </a>
                
                <form method="POST">
                    <h5 class="titulo">Atualizar Área</h5>


                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Digite o nome da área">
                        <label for="nome completo" class="nome_da_area">Nome da Área</label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Atualizar"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>