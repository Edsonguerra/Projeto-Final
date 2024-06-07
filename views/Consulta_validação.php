<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Consulta_validações.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Consulta e Validações</title>
</head>
<body>
    <div class="top">
        <label class="titulo_gerenciamento">Consultas/Análises e Validações</label>
        <a href="Gestão.php">
            <button class="btn-voltar">Voltar</button>
        </a>
    </div>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos">
                    <th class="nome" scope="Id"> Nome completo</th>
                    <th class="sexo" scope="Id"> Sexo</th>
                    <th class="medico" scope="Id"> Consulta marcada</th>
                    <th class="data" scope="Id"> Data de nascimento</th>
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>
            <tbody class="dados_da_consulta">
                <?php 
                $sqli = "SELECT p.nome_completo, p.sexo, c.nome AS consulta_nome, p.data_de_nascimento
                         FROM paciente p
                         JOIN consulta_paciente cp ON p.id_paciente = cp.paciente_id_paciente
                         JOIN consulta c ON cp.consulta_id_da_consulta = c.id_da_consulta";

                $result = mysqli_query($mysqli, $sqli);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nome_completo = $row['nome_completo'];
                        $sexo = $row['sexo'];
                        $consulta_marcada = $row['consulta_nome'];
                        $data_de_nascimento = $row['data_de_nascimento'];
                        
                        echo '<tr>
                            <td class="nome_da_consulta">' . $nome_completo . '</td>
                            <td class="Sexo">' . $sexo . '</td>
                            <td class="medico">' . $consulta_marcada . '</td>
                            <td class="medico">' . $data_de_nascimento . '</td>
                            <td>
                                <a href="#">
                                    <button class="btn-validar">Validar</button>
                                </a>
                                <a href="#">
                                    <button class="btn-cancelar">Cancelar</button>
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