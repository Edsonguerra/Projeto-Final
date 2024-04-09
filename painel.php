<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        Bem vindo ao painel, <?php echo $_SESSION['nome']; ?>
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

            <div class="sair">
                <a href="logout.php">Sair</a>
            </div>



</body>
</html>