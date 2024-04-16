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