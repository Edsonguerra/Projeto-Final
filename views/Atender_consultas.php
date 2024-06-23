<?php 
include('../modules/conexao.php');
include('../modules/protect.php'); 

$areaId = $_GET['areaId'];
$areas = mysqli_query($mysqli, "SELECT * FROM area WHERE id={$areaId}");
$area_data = mysqli_fetch_assoc($areas);

$sqli = "SELECT p.nome_completo, p.sexo, c.nome AS consulta_nome, p.data_de_nascimento, estado,data, p.id_paciente,
         cp.id AS consulta_id
         FROM paciente p
         JOIN consulta_paciente cp ON p.id_paciente = cp.paciente_id_paciente
         JOIN consulta c ON cp.consulta_id_da_consulta = c.id_da_consulta 
         WHERE c.area_id={$areaId}";

$result = mysqli_query($mysqli, $sqli);  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Atender_consulta.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Consulta e Validações</title>
</head>
<body>
    <div class="top">
        <label class="titulo_gerenciamento">Atender consultas na área de <?=$area_data['nome']?></label>
        <a href="Gestão.php">
            <button class="btn-voltar">Voltar</button>
        </a>
        <div class="total2" >
            <label class="selectArea">Total: <?=$result->num_rows?></label>
        </div>
    </div>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos">
                    <th class="nome" scope="Id"> Nome</th>
                    <th class="sexo" scope="Id"> Sexo</th>
                    <th class="medico" scope="Id"> C. marcada</th>
                    <th class="data" scope="Id"> Nascimento</th>
                    <th class="data" scope="Id"> Data e Hora</th>
                    <th class="data" scope="Id"> Estado</th>
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>
            <tbody class="dados_da_consulta">
               <?php
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nome_completo = $row['nome_completo'];
                        $sexo = $row['sexo'];
                        $consulta_marcada = $row['consulta_nome'];
                        $data_de_nascimento = $row['data_de_nascimento'];
                        $estado = $row['estado'];
                        $consulta_id = $row['consulta_id'];
                        $dataHora = $row['data']?? "Pendente";
                        
                        echo '<tr>
                            <td class="nome_da_consulta">' . htmlspecialchars($nome_completo) . '</td>
                            <td class="Sexo">' . htmlspecialchars($sexo) . '</td>
                            <td class="medico">' . htmlspecialchars($consulta_marcada) . '</td>
                            <td class="medico">' . htmlspecialchars($data_de_nascimento) . '</td>
                            <td class="medico">' . htmlspecialchars($dataHora) . '</td>
                            <td class="medico">' . htmlspecialchars($estado) . '</td>
                            <td>

                                <a href="../modules/Validações_finais.php?consulta_id='.urlencode($consulta_id).'&nome_completo=' . urlencode($nome_completo) . '&sexo=' . urlencode($sexo) . '&consulta_nome=' . urlencode($consulta_marcada) . '&data_de_nascimento=' . urlencode($data_de_nascimento). '&area=' . urlencode($_GET['areaId']) . '">
                                    <button class="btn-validar">Atendido</button>
                                </a>
                                <a href="../modules/Validações_finaisController.php?consulta_id='.urlencode($consulta_id). '&area=' . urlencode($_GET['areaId']) . '">
                                    <button class="btn-cancelar">Anulada</button>
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
