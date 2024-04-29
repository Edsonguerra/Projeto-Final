<?php include('../modules/conexao.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gerenciamentoo_consulta.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button class="btn-cria_consulta"  > <a href="Criar_consulta.php">Criar Consulta</a></button>
        <button class="btn-voltar"  > <a href="Gestão.php">Voltar</a></button>
        <table class="table-consulta">
            <thead>
                <tr class="elementos" >
                    <th class="id" scope="Id"> Id</th>
                    <th class="nome" scope="Id"> Nome da consulta</th>
                    <th class="area" scope="Id"> Área profisional</th>
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
            $area_profissional = $row['area_profissional'];

            echo '<tr>
            <th class="id_consulta" scope="row">' . $id . '</th>
            <th class="nome_da_consulta" scope="row">' . $nome_da_consulta . '</th>
            <th class="area_profissional" scope="row">' . $area_profissional . '</th>

            <td>
            <button><a href="Atualizar_consulta.php">Atualizar</a></button>
            <button class="ddd" ><a href="Eliminar_consulta.php?deleteid='.$id.'">Eliminar</a></button>
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