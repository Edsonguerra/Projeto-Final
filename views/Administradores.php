<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Administradoress.css">
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>

    <div class="top" >
        <label class="titulo_gerenciamento" >Funcionários do Sistema</label>
        <a href="Criar_administradores.php">
            <button class="btn-cria_consulta">Criar</button>
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
                    <th class="nome" scope="Id"> Nome</th>
                    <th class="nome" scope="Id"> Nivel</th>         
                    <th class="operações" scope="Id"> Operações</th>
                </tr>
            </thead>
            
            <tbody class="dados_da_consulta" >
            <?php

            $sqli = "SELECT * FROM `funcionario`";

            $result = mysqli_query($mysqli, $sqli);

            if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
            $admin_id = $row['id_funcionario'];
            $nome = $row['nome'];
            $nivel = $row['administrador'];
            if($nivel==1){
                $nivel= "Adminstrador";
            } 
                else {
                    $nivel= "Funcionario";
                }

            echo '<tr>
            <th class="id_consulta" scope="row">' . $admin_id . '</th>
            <th class="nome_da_consulta" scope="row">' . $nome . '</th>
            <th class="nome_da_consulta" scope="row">' . $nivel . '</th>
            
            <td>
                <a href="atualizar_admin.php?updateid='. $admin_id .'">
                <button class="btn-atualizar">Atualizar</button>
                </a>
    
                <a href="../modules/Eliminar_admin.php?deleteid=' . $admin_id .'">
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