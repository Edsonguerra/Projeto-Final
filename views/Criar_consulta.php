<?php
include('../modules/conexao.php');
include('../modules/protect.php');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $area_id = $_POST['id']; 


    $sql_area = "SELECT id FROM area WHERE id = $area_id";
    $result_area = mysqli_query($mysqli, $sql_area);

    if (mysqli_num_rows($result_area) > 0) {

        $sql = "INSERT INTO `consulta` (nome, area_id) VALUES ('$nome', $area_id)";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($mysqli);
        }
    } else {
        echo "Erro: Área selecionada não existe";
    }

    header("Location: ../views/Gerenciamento_de_consultas.php"); 
}



$area_options = ""; 

$sql_areas = "SELECT id, nome FROM area"; 
$result_areas = mysqli_query($mysqli, $sql_areas);

if ($result_areas) {
    while ($row = mysqli_fetch_assoc($result_areas)) {
        $id = $row['id'];
        $nome = $row['nome'];


        $area_options .= "<option value='$id'>$nome</option>";
    }
} else {
    echo "Erro ao recuperar áreas: " . mysqli_error($mysqli); 
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
                        <select name="id" class="input_area" required>
                            <option value="">Selecione a Área</option> <?php echo $area_options; ?>
                        </select>
                        <label class="area_profissional">Área</label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Criar Consulta">
                </form>
            </div>
        </div>
    </div>
</body>
</html>