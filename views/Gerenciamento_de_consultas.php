<?php include('../modules/conexao.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gerenciamento_consultaa.css">
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="top" >
        <label class="titulo_gerenciamento" >Gerenciamento de consultas</label>
        <button class="btn-cria_consulta">Criar Consulta</button>
        <button class="btn-voltar">Voltar</button>
    </div>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos" >
                    <th class="id" scope="Id"> Id</th>
                    <th class="nome" scope="Id"> Nome da consulta</th>
          
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>
            
            <tbody class="dados_da_consulta" >
            <?php 

            $sqli = "SELECT * FROM `tipos_de_consultas`"; 

            $result = mysqli_query($mysqli, $sqli);

            if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $nome_da_consulta = $row['nome_da_consulta'];

            echo '<tr>
            <th class="id_consulta" scope="row">' . $id . '</th>
            <th class="nome_da_consulta" scope="row">' . $nome_da_consulta . '</th>

            <td>
            <button class="btn-atualizar" >Atualizar</button>
            <button class="btn-eliminar"> Eliminar</button>
            </td>

            </tr>';    
             }
            }

            ?>
            </tbody>
        </table>
    </div>
</body>
</html>