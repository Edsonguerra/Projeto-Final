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

    <div class="boas-vindas">
        Bem vindo ao painel, <span class="nome-usuario"><?php echo $_SESSION['nome']; ?></span>
    </div>

    <nav>
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="public/assets/css/img/43493.png" alt="">
                    <span class="nav-item">MENU</span>
                </a>
            </li>
            <li><a href="#">
                <i class="fa-solid fa-clipboard-question"></i>
                <span class="nav-item">Consultar Consulta</span>
            </a></li>

            <li><a href="#">
            <i class="fa-solid fa-user-tie"></i>
                <span class="nav-item">Administrador</span>
            </a></li>

            <li><a href="#">
            <i class="fa-solid fa-handshake-angle"></i>
                <span class="nav-item">Ajuda</span>
            </a></li>

            <li><a href="logout.php" class="sair">
            <i class="fa-solid fa-right-from-bracket"></i>
                <span class="nav-item">Sair</span>
            </a></li>
        </ul>
    </nav>


    <header>
       <h1 class="Hospital">Hospital dos cajueiros</h1>
        <nav class="icones">
            <a href="Sobre.html">Sobre</a>
            <a href="Sobre.html">Ajuda</a>
                <a href="index.html">
                    <a href="index.html">
                        <button class="botaologin">Login</button>
                    </a>
                </a>
        </nav>  
    </header>

    <div class="name">
        <h2>Seja bem vindo ao site de <p> marcações de consultas online <p> do Hospital dos Cajueiros!</h2>
    </div>
        <div class="Conteudo">
            <h3>Faça a sua marcação de consultas de forma rapida e simples selecionando o tipo <p> de consulta abaixo.</h3>
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


</body>
</html>