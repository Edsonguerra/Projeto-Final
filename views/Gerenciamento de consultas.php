<?php include('../modules/conexao.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gerenciamento_consulta.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button class="btn-cria_consulta"  > <a href="Criar_consulta.php">Criar Consulta</a></button>
        <table class="table-consulta">
            <thead>
                <tr class="elementos" >
                    <th class="id" scope="Id"> Id</th>
                    <th class="nome" scope="Id"> Nome da consulta</th>
                    <th class="area" scope="Id"> Área profisional</th>
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>

            <tbody>

                <?php
                
                $sqli="select * from `tipos_de_consultas`";
                $result=mysqli_query($mysqli);

                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $nome_da_consulta=$row['nome_da_consulta'];
                        $area_profissional=$row['area_profissional'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <th scope="row">'.$nome_da_consulta.'</th>
                        <th scope="row">'.$area_profissional.'</th>
                        </tr>';
                    }
                }
                
                ?>
            </tbody>

        </table>
    </div>
</body>
</html>