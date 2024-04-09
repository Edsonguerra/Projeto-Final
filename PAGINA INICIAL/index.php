<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Pagina Inicial</title>
</head>
<body>
    <header>
       <h1 class="Hospital">Hospital dos cajueiros</h1>
   <nav class="icones">
    <a href="Sobre.html">Sobre</a>
    <a href="Ajuda.html">Ajuda</a>
    <button class="botaologin">Login</button>
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

    <div class="Selecionar2">
        <div class="selecionar-botao2">
            <span class="texto2">Selecionar Analise</span>
            <span class="down-arrow">
                <i class="fa-solid fa-chevron-down"></i>
            </span> 
        </div>

        <ul class="lista-consulta2">
            <li class="lista2">
                <img class="img2" width="35 " src="public/assets/css/img/43493.png" alt="">
                <span class="checked">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="primeiro-lista2">Analise de Gravidez</span>
            </li>
            <li class="lista2">
                <img class="img2" width="35" src="public/assets/css/img/43493.png" alt="">
                <span class="checked">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="primeiro-lista2">Analise de Urina</span>
            </li>
            <li class="lista2">
                <img class="img2" width="35" src="public/assets/css/img/43493.png" alt="">
                <span class="checked">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="primeiro-lista2">Analise de Paludismo</span>
            </li>
            <li class="lista2">
                <img class="img2" width="35" src="public/assets/css/img/43493.png" alt="">
                <span class="checked">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="primeiro-lista2">Analise de Colesterol</span>
            </li>
            <li class="lista2">
                <img class="img2" width="35" src="public/assets/css/img/43493.png" alt="">
                <span class="checked">
                    <i class="fa-solid fa-check check-icon"></i>
                </span>
                <span class="primeiro-lista2">Analise de Glicose</span>
            </li>
            <input class="button2" type="submit" value="Marcar Consulta"> 
        </ul>
    </div>
    

  
    <div class="Conteudos-de-baixo">
        <img src="public/assets/css/img/EXAME.jpg">
        <h4 class="Hosp">Hospital dos Cajueiros</h4>
        <h5 class="Infor">Informações</h5>
        <a class="Sobre" href="Sobre.html">Sobre</a>
        <a class="Contacto" href="Contacto.html">Contacto</a>
        <a class="Termos" href="Termos.html">Termos</a>
        <a class="Politica" href="Politica.html">Politica de privacidade</a>
    </div>

    <script src="public/js/index.js"></script>
</body>
</html>