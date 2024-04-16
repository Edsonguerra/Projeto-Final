<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/paine.style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Gudea:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900&family=Jura:wght@300..700&family=Noto+Sans+Mono:wght@100..900&family=PT+Mono&family=Sawarabi+Gothic&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


<!------------------------------------- Menu  -------------------------------------------->

    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="fa-solid fa-hospital"></i>
                <span>Hospital Cajueiros</span>
            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <span class="nav-item">Consultar</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <span class="nav-item">Ajuda</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-users"></i>
                    <span class="nav-item">Gestão</span>
                </a>
            </li>

            <li>
                <a href="logout.php" class="sair">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="nav-item">Sair</span>
                </a>
            </li>
        </ul>
    </div>


     
    <script>
        let btn = document.querySelector('#btn')
        let sidebar = document.querySelector('.sidebar')

        btn.onclick = function () {
            sidebar.classList.toggle('active')
        };
    </script>


<!------------------------------------- Textos da pagina   -------------------------------------------->



    <div class="main-content">
        <div class="container">
            <h1 class="bem-vindo">Bem vindo!</h1>
            <h2 class="name">Marque agora mesmo <br> a tua Consulta ou Análise <br> de uma forma fácil e segura!</h2>
            <h3 class="Conteudo">A tua saúde é a nossa prioridade!</h3>

        </div>
    </div>



<!------------------------------------- Mensagem de bem-vindo  -------------------------------------------->
                    
   <div class="boas-vindas">
        <i class="icone fa-solid fa-circle-check"></i>
        <span class="sucesso"> <strong>Sucesso ao Entrar</strong> <br> </span>
        <span class="texto-bem-vindo"> <br> Bem vindo</span> <span class="nome-usuario"> <br> <?php echo $_SESSION['nome']; ?>!</span>
   </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
    
        if (window.performance && window.performance.navigation.type === 1) {
   
        $('.boas-vindas').hide();
        } else {

        $('.boas-vindas').fadeIn();
        var interval = setInterval(function() {
        $('.boas-vindas').fadeOut();
        clearInterval(interval);
        }, 2000); // 1 segundo
    }
    });
    </script>






    
</body>
</html>