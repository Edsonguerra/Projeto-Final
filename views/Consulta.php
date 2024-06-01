<?php 
include('../modules/conexao.php');
include('../modules/protect.php'); 

// Verifique se a sessão não está ativa e inicie-a
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$message = "";
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
    unset($_SESSION['message']); // Limpar a mensagem da sessão após exibição
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
        <label class="titulo_gerenciamento">Consultar consulta</label>
        <a href="Painel.php">
        <button class="btn-voltar">Voltar</button>
        </a>
    </div>

    <?php if (!empty($message)): ?>
        <div class="mensagem">
            <span class="mensagem1"> <strong>Consulta marcada</strong> <br> </span>
            <div class="mensagem2">
            <?php echo $message; ?>
            </div>
            <i class="icone fa-solid fa-circle-check"></i>
        </div>
    <?php endif; ?>

    <script>
    setTimeout(function(){
        document.querySelector('.mensagem').style.display = 'none';
    }, 2000); // Tempo em milissegundos (2 segundos = 2000 milissegundos)
    </script>

    <div class="container">
        <table class="table-consulta">
            <thead>
                <tr class="elementos">
                    <th class="nome" scope="Id"> Nome completo</th>         
                    <th class="sexo" scope="Id"> Sexo</th>
                    <th class="consulta" scope="Id"> Consulta/Análise</th>
                </tr>
            </thead>
            <tbody class="dados_da_consulta">
                <?php 
                $sqli = "SELECT * FROM `paciente`"; 
                $result = mysqli_query($mysqli, $sqli);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nome_completo = $row['nome_completo'];
                        $sexo = $row['sexo'];
                        echo '<tr>
                        <th class="nome_da_consulta" scope="row">' . $nome_completo . '</th>
                        <th class="Sexo" scope="row">' . $sexo . '</th>
                        </tr>';    
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>