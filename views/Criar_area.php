<?php
include('../modules/conexao.php'); 
include('../modules/protect.php');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];

    $sql = "INSERT INTO `area` (nome) VALUES ('$nome')";
    $result = mysqli_query($mysqli, $sql);

    if ($result) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($mysqli);
    }
    header("Location: ../views/Area.php");  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Criar_área.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="Area.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form method="POST">
                    <h5 class="titulo">Criar Area</h5>

                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Digite o nome da área">
                        <label for="nome" class="nome_da_area">Nome da área</label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Criar área">
                </form>
            </div>
        </div>
    </div>
</body>
</html>