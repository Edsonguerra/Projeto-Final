<?php
include('../modules/conexao.php'); 

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $tipo_consulta = $_POST['tipo_consulta']; 

    $sql = "INSERT INTO `consulta` (nome, tipo_consulta) VALUES ('$nome', '$tipo_consulta')";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($mysqli);
    }
    header("Location: ../views/Gerenciamento_de_consultas.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Criar_consulta.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="Gerenciamento_de_consultas.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form method="POST">
                    <h5 class="titulo">Criar Consultas</h5>

                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Digite o nome da consulta">
                        <label for="nome" class="nome_da_consulta">Nome da consulta</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="tipo_consulta" class="input_area" required placeholder="Digite a área profissional">
                        <label class="area_profissional">Área Profissional</label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Criar Consulta">
                </form>
            </div>
        </div>
    </div>
</body>
</html>