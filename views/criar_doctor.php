<?php
include('../modules/conexao.php');
include('../modules/protect.php');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $area_id = $_POST['id']; 
    $funcionario_id = $_POST['funcionario_id']; // Adiciona o campo para funcionario_id

    // Verifica se a área existe
    $sql_area = "SELECT id FROM area WHERE id = $area_id";
    $result_area = mysqli_query($mysqli, $sql_area);

    // Verifica se o funcionario_id existe
    $sql_funcionario = "SELECT id_funcionario FROM funcionario WHERE id_funcionario = $funcionario_id";
    $result_funcionario = mysqli_query($mysqli, $sql_funcionario);

    if (mysqli_num_rows($result_area) > 0 && mysqli_num_rows($result_funcionario) > 0) {
        // Insere os dados na tabela doctor
        $sql = "INSERT INTO `doctor` (nome, area_id, funcionario_id) VALUES ('$nome', $area_id, $funcionario_id)";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir dados: " . mysqli_error($mysqli);
        }
    } else {
        echo "Erro: Área ou Funcionário selecionado não existe";
    }
}

// Popula as opções de área
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

// Popula as opções de funcionário
$funcionario_options = "";
$sql_funcionarios = "SELECT id_funcionario, nome FROM funcionario";
$result_funcionarios = mysqli_query($mysqli, $sql_funcionarios);

if ($result_funcionarios) {
    while ($row = mysqli_fetch_assoc($result_funcionarios)) {
        $id_funcionario = $row['id_funcionario'];
        $nome_funcionario = $row['nome'];
        $funcionario_options .= "<option value='$id_funcionario'>$nome_funcionario</option>";
    }
} else {
    echo "Erro ao recuperar funcionários: " . mysqli_error($mysqli); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/doctores.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="Doctores.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form method="POST">
                    <h5 class="titulo">Criar doctor</h5>

                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Digite o nome do doctor">
                        <label for="nome" class="nome_da_consulta">Nome do doctor</label>
                    </div>

                    <div class="input-box">
                        <select name="id" class="input_area" required>
                            <option value="">Selecione a Área</option> 
                            <?php echo $area_options; ?>
                        </select>
                        <label class="area_profissional">Área</label>
                    </div>

                    <div class="input-box">
                        <select name="funcionario" class="input_funcionario" required>
                            <option value="">Selecione o Funcionário</option>
                            <?php echo $funcionario_options; ?>
                        </select>
                        <label class="funcionario">Funcionário</label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Criar Consulta">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
