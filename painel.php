<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/painel.style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
</head>
<body>


    <div class="sidebar">
        <div class="logo_details">
            <i class="fa-solid fa-hospital"></i>
            <div class="logo_name">Hospital Cajueiros</div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="#">
                    <i class="meu-icone fa-solid fa-clipboard-question"></i>
                    <span class="link_name">Consultar Consulta</span> 
                </a>
                <span class="tooltip">Consultar Consulta</span>
            </li>

            <li>
                <a href="#">
                    <i class="meu-icone fa-solid fa-user-tie"></i>
                    <span class="link_name">Gestão</span> 
                </a>
                <span class="tooltip">Gestão</span>
            </li>

            <li>
                <a href="#">
                    <i class="meu-icone fa-solid fa-handshake-angle"></i>
                    <span class="link_name">Ajuda</span> 
                </a>
                <span class="tooltip">Ajuda</span>
            </li>

            
            <li>
                <a href="logout.php">
                    <i class="meu-icone fa-solid fa-right-from-bracket"></i>
                    <span class="link_name">Ajuda</span> 
                </a>
                <span class="tooltip">Ajuda</span>
            </li>
        </ul>
    </div>

 

   
                    
    <div class="boas-vindas">
        Bem vindo ao painel, <span class="nome-usuario"><?php echo $_SESSION['nome']; ?></span>
    </div>



    <?php
    $host="localhost";
    $user="root";
    $password="";
    $bancodedados ="site_marcação_de_consulta";

    $mysqli = new  mysqli($host, $user, $password, $bancodedados);
    $tiposdeconsultas = mysqli_query($mysqli, "SELECT * FROM tipos_de_consultas"); 
    ?>

    <form action="processa_consulta.php" method="POST">
        <div class="Selecionar">
            <div class="selecionar-botao">
                <span class="texto">Selecionar Consulta</span>
                <span class="down-arrow">
                    <i class="fa-solid fa-chevron-down"></i>
                </span> 
            </div>
            <ul class="lista-consulta">
            <?php if ($tiposdeconsultas->num_rows > 0): ?> 
            <?php while ($row = $tiposdeconsultas->fetch_assoc()) :?> 
            <li class="lista">
            <img class="img" width="35 " src="public/assets/css/img/43493.png" alt="">
            <span class="checked"><i class="fa-solid fa-check check-icon"></i></span>
            <span class="primeiro-lista"><?php echo $row["nome"]?></span>
            <input type="checkbox" name="tipo_consulta[]" value="Consulta_de_Dermatologia">
                </li>
            <?php endwhile;?>     
            <input class="button" type="submit" value="Marcar Consulta"> 
            <?php else:?>
                <p>Consultas indisponiveis</p>     
            <?php endif;?>     
            </ul>   
        </div>    
    </form>



    <script src="public/js/index.js"></script>
</body>
</html>