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

  
    <div class="menu">
        <div class="top">
            <div class="logo">
                <img src="public/assets/css/img/43493.png" alt="">
                <span>Menu</span>
            </div>
            <i class="fa-solid fa-chevron-right" id="btn"></i>
        </div>
        <ul>
            <li>
                <a href="#">
                    <i class="meu-icone fa-solid fa-clipboard-question"></i>
                    <span class="nav-item">Consultar Consulta</span>
                </a>
                <span class="tooltip">Consultar Consulta</span>
            </li>

            <li>
                <a href="#">
                    <i class="meu-icone fa-solid fa-user-tie"></i>
                    <span class="nav-item">Administrador</span>
                </a>
                <span class="tooltip">Adiminstrador</span>
            </li>

            <li>
                <a href="#">
                    <i class="meu-icone fa-solid fa-handshake-angle"></i>
                    <span class="nav-item">Ajuda</span>
                </a>
                <span class="tooltip">Ajuda</span>
            </li>

            <li>
                <a href="logout.php">
                    <i class="meu-icone fa-solid fa-right-from-bracket"></i>
                    <span class="nav-item">Sair</span>
                </a>
                <span class="tooltip">Sair</span>
            </li>

        </ul>
    </div>


</body>

<script>
    let btn = document.querySelector('#btn')
    let menu = document.querySelector('.menu')

    btn.onclick = function () {
        menu.classList.toggle('active')
    };
</script>
</html>