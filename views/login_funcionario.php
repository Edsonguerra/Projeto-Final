<?php
session_start();
include('../modules/conexao.php');

if (isset($_GET['error'])) {
  $errorMessage = htmlspecialchars($_GET['error']);

  if ($errorMessage === 'Email incorreto') {
    echo '<div id="error-messege" class="error-message">';
    echo '<div class="error-email"><strong>Email incorreto</strong></div>';
    echo '<i class="icone2 fa-solid fa-circle-xmark"></i>';
    echo '<div class="error-email2">Tente novamente!</strong></div>';
    echo '</div>';
  } else if ($errorMessage === 'Senha incorreta') {
    echo '<div id="error-messege" class="error-message">';
    echo '<div class="error-email"><strong>Senha incorreta</strong></div>';
    echo '<i class="icone2 fa-solid fa-circle-xmark"></i>';
    echo '<div class="error-email2">Tente novamente!</strong></div>';
    echo '</div>';
  } else {
    echo '<div class="error-message">' . $errorMessage . '</div>';
  }
}

if (isset($_GET['success'])) {
    echo '<div id="success-message" class="success-message">';
    echo '<label class="successo-label"><strong>Sucesso ao entrar</strong></label>';
    echo '<br>';
    echo '<i class="icone fa-solid fa-circle-check"></i>';
    echo '<label class="successo-label2">Bem-vindo/a</label>';
    echo '</div>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/funcionario_logiin.css">
    <link rel="stylesheet" href=" public/assets/css/indx.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Gudea:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900&family=Jura:wght@300..700&family=Noto+Sans+Mono:wght@100..900&family=PT+Mono&family=Sawarabi+Gothic&family=Teko:wght@300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&family=Squada+One&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">  
        <nav class="nav">
            <a href="../index.php">
                <div class="nav-hospital">
                    <p>Hospital dos Cajueiros</p>
                </div>
            </a>
            <div class="nav-menu">
                <ul>
                    <li><a href="../index.php" class="link">Pagina Inicial</a></li>
                    <li><a href="Contacto.html" class="link">Contacto</a></li>
                    <li><a href="Ajuda.html" class="link">Ajuda</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <a href="login.php">
                <button class="btn"  id="loginBtn"  onclick="login()">Login usuario</button>
                </a>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="mymenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box">
            <form action="../modules/login_funcionario.php" method="POST" class="login-container" id="login">
                <div class="top">
                    <span class="people" >Apenas pessoas autorizadas</span>
                    <span class="devem" >podem fazer o login.</span>
                    <header>Entrar</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Digite o seu email" name="email" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Digite a tua palavra-passe" name="senha">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" name="entrar" class="submit" value="Entrar">
                </div>
                <div class="two-col">
                    <div class="two">
                        <label><a href="login.php">Login usuario</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>   

   <script>

         window.onload = function() {
            var successMessage = document.getElementById("success-message");
            if (successMessage) {
                setTimeout(function() {
                    window.location.href = '../views/painel.php';
                }, 2000);
            }
        } 

        setTimeout(function() {
        document.getElementById('mensagem-cadastro').style.display = 'none';
        }, 2000); 

        setTimeout(function() {
        document.getElementById('error-messege').style.display = 'none';
        }, 2000); 
    </script>

</body>
</html>