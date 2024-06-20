<?php
include('../modules/conexao.php');
include('../modules/protect.php');

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$message = "";
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Consulta.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    <div class="top">
        <label class="titulo_gerenciamento">Consultas Marcadas</span></label>
        <a href="painel.php">
            <button class="btn-voltar">Voltar</button>
        </a>
        <select name="area" id="selectArea" class="selectArea">
    <?php $areas= mysqli_query($mysqli, "SELECT * FROM area"); ?>
      <?php if($areas):?>
        <?php while($area_data = mysqli_fetch_assoc($areas)):?>
            <option name=<?=$area_data['nome']?> value=<?=$area_data['id']?>> <?=$area_data['nome']?> </option>
            <?php endwhile; ?>            
        <?php endif;?>
        </select>
    </div>

    <?php if (!empty($message)): ?>
        <div class="mensagem">
            <span class="mensagem1"> <strong>Consultas Marcada</strong> <br> </span>
            <div class="mensagem2">
                <?php echo $message; ?>
            </div>
            <i class="icone fa-solid fa-circle-check"></i>
        </div>
    <?php endif; ?>


    <script>
    setTimeout(function(){
        document.querySelector('.mensagem').style.display = 'none';
    }, 2000); 
    </script>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos">
                    <th class="nome" scope="Id"> Nome completo</th>
                    <th class="sexo" scope="Id"> Sexo</th>
                    <th class="consulta" scope="Id"> Consulta</th>
                    <th class="data" scope="Id"> Data da Consulta</th>
                    <th class="data" scope="Id"> Estado</th>
                    <th class="data" scope="Id"> Posição</th>
                </tr>
            </thead>
            <tbody class="dados_da_consulta">
                <?php
                $areas= mysqli_query($mysqli, "SELECT * FROM area");
                $area_zero = mysqli_fetch_assoc($areas);
                $area_zero_id=$area_zero['id'];
        
                $sqli = "SELECT p.nome_completo, p.sexo, c.nome AS consulta_nome, cp.data, estado,posicao
                         FROM paciente p
                         JOIN consulta_paciente cp ON p.id_paciente = cp.paciente_id_paciente
                         JOIN consulta c ON cp.consulta_id_da_consulta = c.id_da_consulta WHERE c.area_id={$area_zero_id}";
                $result = mysqli_query($mysqli, $sqli);

     
                if ($result) {
                    while ($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $user_data['nome_completo'] . "</td>";
                        echo "<td>" . $user_data['sexo'] . "</td>";
                        echo "<td>" . $user_data['consulta_nome'] . "</td>";
                        if(is_null($user_data['data'])){
                            echo "<td> Pendente </td>";
                        }else{
                            echo "<td>" . $user_data['data'] . "</td>";
                        }
                        echo "<td>" . $user_data['estado'] . "</td>";
                        echo "<td>" . $user_data['posicao'] . "</td>";
                        echo "</tr>";
                    }
                } else {
          
                    echo "<tr><td colspan='4'>Erro na consulta SQL: " . mysqli_error($mysqli) . "</td></tr>";
                }
                
                ?>
            </tbody>
        </table>
    </div>
    <script>
        const selectArea=document.querySelector("#selectArea");
        selectArea.addEventListener("change",async (el)=>{
            const idArea=el.target.value;
            const response= await fetch(`http://localhost/Projeto-Final/modules/consultasMarcadas.php/?idArea=${idArea}`);
            const data = await response.json();
            const dados_da_consulta=document.querySelector(".dados_da_consulta");
            dados_da_consulta.innerHTML='';
            if(data.length===0){
                dados_da_consulta.innerHTML=`<tr><td colspan='4'>Sem Consultas nesta Área</td></tr>`;             
            }

            data.forEach(element => {
                dados_da_consulta.innerHTML+=`
                <tr>
                <td>${element.nome_completo}</td>
                <td>${element.sexo}</td>
                <td>${element.consulta_nome}</td>
                <td>${element.data==null?'Pendente':element.data}</td>
                <td>${element.estado}</td>
                 <td>${element.posicao}</td>
            </tr>
                `    
            });            
        })
    </script>
</body>
</html>