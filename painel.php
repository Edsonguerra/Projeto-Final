<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/painelll.style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

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

    <div class="main-content">
        <div class="container">
            <h1 class="bem-vindo" >Bem vindo</h1>
            <h2 class="name">Marque agora mesmo <br> a tua Consulta ou Analise <br> de uma forma fácil e segura!</h2>
            <h3 class="Conteudo">A tua saúde é a nossa prioridade!</h3>

        </div>
    </div>






 
    <script>
        let btn = document.querySelector('#btn')
        let sidebar = document.querySelector('.sidebar')

        btn.onclick = function () {
            sidebar.classList.toggle('active')
        };
    </script>
   




                    
   <div class="boas-vindas">
        <i class="icone fa-solid fa-circle-check"></i>
        <span class="sucesso"> <strong>Sucesso ao Entrar</strong> <br> </span>
        <span class="texto-bem-vindo"> <br> Bem vindo</span> <span class="nome-usuario"> <br> <?php echo $_SESSION['nome']; ?>!</span>
   </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
        // Verifica se a página foi atualizada
        if (window.performance && window.performance.navigation.type === 1) {
        // Se a página foi atualizada, esconde a mensagem
        $('.boas-vindas').hide();
        } else {
        // Se a página não foi atualizada, mostra a mensagem e a esconde após 1 segundo
        $('.boas-vindas').fadeIn();
        var interval = setInterval(function() {
        $('.boas-vindas').fadeOut();
        clearInterval(interval);
        }, 1000); // 1 segundo
    }
});
    </script>
</body>
</html>