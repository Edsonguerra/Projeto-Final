<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gerenciamento_análises.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="top" >
        <label class="titulo_gerenciamento2" >Gerenciamento de Análises</label>
        <a href="Criar_análise.php">
            <button class="btn-cria_analise">Criar Análise</button>
        </a>
        <a href="Gestão.php">
        <button class="btn-voltar2">Voltar</button>
        </a>
    </div>

    <div class="container">
        <table class="table-analise">
            <thead>
                <tr class="elementos" >
                    <th class="id" scope="Id"> Id</th>
                    <th class="nome" scope="Id"> Nome da análise</th>         
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>
            
            <tbody class="dados_da_consulta" >
            <?php 

            $sqli = "SELECT * FROM `analise`"; 

            $result = mysqli_query($mysqli, $sqli);
            
            if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
            $id_da_analise = $row['id_da_analise'];
            $nome = $row['nome'];
            
            echo '<tr>
            <th class="id_análise" scope="row">' . $id_da_analise . '</th>
            <th class="nome_da_análise" scope="row">' . $nome . '</th>

            <td>
            <a href="Atualizar_analise.php?updateid=' . $id_da_analise . '">
            <button class="btn-atualizar">Atualizar</button>
            </a>
            
            <a href="../modules/Eliminar_analise.php?deleteid=' . $id_da_analise . '">
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