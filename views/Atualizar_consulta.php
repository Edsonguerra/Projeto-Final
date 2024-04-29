<?php include('../modules/conexao.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Atualizar_consulta.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                
                <a href="Gestão.php">
                    <button class="voltar">Voltar</button>
                </a>
                
                <form action="../modules/Formulário.php" method="POST">
                    <h5 class="titulo">Atualizar Consultas</h5>


                    <div class="input-box">
                        <input type="text" name="nome_da_consulta" class="input_nome" required placeholder="Digite o nome da consulta">
                        <label for="nome completo" class="nome_da_consulta">Nome da consulta</label>
                    </div>

                    <div class="input-box">
                        <input type="text" name="area_profissional" class="input_area" required placeholder="Digite a área profissional">
                        <label class="area_profissional">Área Profissional</label>
                    </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Atualizar"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>