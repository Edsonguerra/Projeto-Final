<?php 
include('../modules/conexao.php');
include('../modules/protect.php'); 

$consulta_nome = htmlspecialchars($_GET['consulta_nome'] ?? '');
$nome_completo = htmlspecialchars($_GET['nome_completo'] ?? '');
$data_de_nascimento = htmlspecialchars($_GET['data_de_nascimento'] ?? '');
$consulta_id = htmlspecialchars($_GET['consulta_id'] ?? '');
$sexo = htmlspecialchars($_GET['sexo'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Validações_finaiiiiis.css">
    <title>Validações Finais</title>
</head>
<body>

    <div class="consultas-container">
        <select name="id" class="input" id="consultasSelecionadas">
            <option value=<?=$consulta_nome ?>><?=$consulta_nome ?></option>
        </select>
        <label class="titulo_consulta">Consulta selecionada</label>
    </div>

    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="../views/Gestão.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form action="./Validações_finaisController.php" method="POST">
                    <h5 class="titulo">Validações Finais</h5>
                    <div class="input-box">
                        <input type="text" name="nome_completo" id="nome_completo" class="input_nome" value="<?= $nome_completo ?>" readonly>
                        <label for="nome_completo" class="nome_completo">Nome completo do Paciente</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="data_de_nascimento" id="data_de_nascimento" class="input-bilhete" value="<?= $data_de_nascimento ?>" readonly>
                        <label for="data_de_nascimento" class="bilhete">Data de nascimento</label>
                    </div>
                    
                    <br>
                    <div class="Genero">
                        <br><br>
                        <p class="Sexo">Sexo:</p>
                        <input type="radio" id="feminino" name="sexo" value="Feminino" <?= ($sexo == 'Feminino') ? 'checked' : '' ?> required readonly>
                        <label for="feminino">Feminino</label>
                    </div>
    
                    <div class="Genero">
                        <input type="radio" id="Masculino" name="sexo" value="Masculino" <?= ($sexo == 'Masculino') ? 'checked' : '' ?> required readonly>
                        <label for="Masculino">Masculino</label>
                    </div>

                    <div class="input-box">
                        <label class="data_nascimento" for="data_nascimento">Data e hora da consulta:</label> 
                        <input type="datetime-local" name="data" id="date" class="inputUser" required>
                    </div>

                    <div class="input-box">
                        <select name="estado" id="estado" class="input_estado" required>
                            <option value="" disabled selected>Selecione o estado da consulta</option>
                            <option value="Marcada">Marcada</option>
                            <option value="Remarcada">Remarcada</option>
                        </select>
                        <label class="estado">Estado da consulta</label>
                    </div>

                    <input type="hidden" name="consultaId" value=<?=$consulta_id?> id="consultasId">
                    <input type="hidden" name="areaId" value=<?=$_GET['area']?>>            
                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Enviar">    
                </form>
            </div>
        </div>
    </div>

    <!-- <script>
        const consultasSelecionadas = document.querySelector("#consultasSelecionadas");
        const consultas = JSON.parse(localStorage.getItem("consultasObjectos"));
        const consultasID = [];
        for (const key in consultas) {
            consultasSelecionadas.innerHTML += `<option value=${consultas[key]} selected disabled>${key}</option>`;
            consultasID.push(consultas[key]);
        }
        document.querySelector("#consultasId").value = consultasID;
        localStorage.clear("consultasObjectos");
    </script> -->
</body>
</html>
