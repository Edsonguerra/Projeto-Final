<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gerenciamento_consultas.css">
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="top" >
        <label class="titulo_gerenciamento" >Doctores</label>
        <a href="Criar_doctor.php">
            <button class="btn-cria_consulta">Criar Doctor</button>
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
                    <th class="nome" scope="Id"> Nome do Doctor</th>         
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>
            
            <tbody class="dados_da_consulta" >
            <?php 

            $sqli = "SELECT * FROM `doctor`"; 

            $result = mysqli_query($mysqli, $sqli);
            
            if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
            $id_doctor = $row['id_doctor'];
            $nome = $row['nome'];
            
            echo '<tr>
            <th class="id_consulta" scope="row">' . $id_doctor . '</th>
            <th class="nome_da_consulta" scope="row">' . $nome . '</th>

            <td>
            <a href="Atualizar_consulta.php?updateid=' . $id_doctor . '">
            <button class="btn-atualizar">Atualizar</button>
            </a>
            
            <a href="../modules/Eliminar_consulta.php?deleteid=' . $id_doctor . '">
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
