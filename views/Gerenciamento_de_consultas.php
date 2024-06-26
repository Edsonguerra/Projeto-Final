<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gerenciamento_consultaaas.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="top" >
        <label class="titulo_gerenciamento" >Gerenciamento de consultas</label>
        <a href="Criar_consulta.php">
            <button class="btn-cria_consulta">Criar Consulta</button>
        </a>
        <a href="Gestão.php">
        <button class="btn-voltar">Voltar</button>
        </a>
    </div>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos" >
                    <th class="id" scope="Id"> Id</th>
                    <th class="nome" scope="Id"> Nome da consulta</th>      
                    <th class="nome" scope="Id"> Área</th>  
                    <th class="operações" scope="Id"> Operações</th>

                </tr>
            </thead>
            
            <tbody class="dados_da_consulta" >
            <?php 

        $sqli = "SELECT * FROM `consulta`";

        $result = mysqli_query($mysqli, $sqli);

        if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
        $id_da_consulta = $row['id_da_consulta'];
        $nome = $row['nome'];
        $area_id = $row['area_id'];
        $doctor_area = "SELECT * FROM `area` WHERE id=$area_id" ;
        $result_doctor = mysqli_query($mysqli, $doctor_area);
        $doctor_area_nome= mysqli_fetch_assoc($result_doctor)['nome']; 
            
            echo '<tr>
            <th class="id_consulta" scope="row">' . $id_da_consulta . '</th>
            <th class="nome_da_consulta" scope="row">' . $nome . '</th>
            <th class="nome_da_consulta" scope="row">' . $doctor_area_nome . '</th>

            <td>
            <a href="Atualizar_consulta.php?updateid=' . $id_da_consulta . '">
            <button class="btn-atualizar">Atualizar</button>
            </a>
            
            <a href="../modules/Eliminar_consulta.php?deleteid=' . $id_da_consulta . '">
                <button class="btn-eliminar">Eliminar</button>
            </a>
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