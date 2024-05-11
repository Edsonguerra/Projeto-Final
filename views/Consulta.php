<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Consulta.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="top" >
        <label class="titulo_gerenciamento" >Consulta consulta</label>
        <a href="Painel.php">
        <button class="btn-voltar">Voltar</button>
        </a>
    </div>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos" >
                    <th class="nome" scope="Id"> Nome completo</th>         
                    <th class="sexo" scope="Id"> Sexo</th>
                    <th class="medico" scope="Id"> Historico Medico</th>
                    <th class="data" scope="Id"> Data de nascimento</th>
                    
                </tr>
            </thead>
            
            <tbody class="dados_da_consulta" >
            <?php 

            $sqli = "SELECT * FROM `paciente`"; 

            $result = mysqli_query($mysqli, $sqli);
            
            if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
            $nome_completo = $row['nome_completo'];
            $sexo = $row['sexo'];
            $historico_medico = $row['historico_medico'];
            $data_de_nascimento = $row['data_de_nascimento'];
            
            echo '<tr>
            <th class="nome_da_consulta" scope="row">' . $nome_completo . '</th>
            <th class="Sexo" scope="row">' . $sexo . '</th>
            <th class="medico" scope="row">' . $historico_medico . '</th>
            <th class="medico" scope="row">' . $data_de_nascimento . '</th>
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