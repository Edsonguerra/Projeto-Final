<?php
include('../modules/conexao.php');
include('../modules/protect.php');

if (isset($_GET['updateid']) && is_numeric($_GET['updateid'])) {
  $id_doctor = $_GET['updateid'];

  if (isset($_POST['submit'])) {
    $nome = mysqli_real_escape_string($mysqli, $_POST['nome']); 
    $area_id = mysqli_real_escape_string($mysqli, $_POST["area_profissional"]);

    $stmt = $mysqli->prepare("UPDATE doctor SET nome = ?, area_id = ? WHERE id_doctor = ?");
    $stmt->bind_param("sii", $nome, $area_id, $id_doctor);
    $stmt->execute();
    $stmt->close();


    header("Location: Doctores.php");
    exit(); 
  }

} else {
  echo "ID da consulta inválido";
  exit;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Atualizar_doctoor.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario-consulta">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                
                <a href="Doctores.php">
                    <button class="voltar">Voltar</button>
                </a>
                
                <form method="POST">
                    <h5 class="titulo">Atualizar Doctor</h5>
                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Atualize o nome da consulta">
                        <label for="nome completo" class="nome_da_consulta">Nome do doctor</label>
                    </div>

                    <div class="input-box">
                        <select  id="selectArea" name="area_profissional" class="input_area">
                            <?php $areas= mysqli_query($mysqli, "SELECT * FROM area"); ?>
                            <?php if($areas):?>
                            <?php while($area_data = mysqli_fetch_assoc($areas)):?>
                            <option value=<?=$area_data['id']?>> <?=$area_data['nome']?> </option>
                            <?php endwhile; ?>            
                            <?php endif;?>
                        </select>
                            <label for="selectArea" class="area_profissional">Área Profissional</label>
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Atualizar"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>