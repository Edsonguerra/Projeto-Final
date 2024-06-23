<?php include('../components/header.php'); ?>

<?php
session_start();

if (isset($_SESSION['cadastro_msg'])) {
?>
  <div id="mensagem-cadastro" class="mensagem_registro">
    <?php echo $_SESSION['cadastro_msg']; ?>
    <label class="successo-label"><strong>Registro realizado</strong></label>
    <br>
    <i class="icone fa-solid fa-circle-check"></i>
    <label class="successo-label2">com sucesso!</label>
  </div>
<?php
  unset($_SESSION['cadastro_msg']);
}
?>


<?php

if (isset($_GET['error'])) {
  $errorMessage = htmlspecialchars($_GET['error']);


  if ($errorMessage === 'Email incorreto') {
    echo '<div id="error-messege" class="error-message">';
    echo '<div class="error-email"><strong> Email incorreto </strong></div>';
    echo '<i class="icone2 fa-solid fa-circle-xmark"></i>';
    echo '<div class="error-email2">Tente novamente! </strong></div>';
    echo '</div>';
  } else if ($errorMessage === 'Senha incorreta') {
    echo '<div  id="error-messege" class="error-message">';
    echo '<div class="error-email"><strong> Senha incorreta </strong></div>';
    echo '<i class="icone2 fa-solid fa-circle-xmark"></i>';
    echo '<div class="error-email2">Tente novamente! </strong></div>';
    echo '</div>';
  } else {

    echo '<div class="error-message">' . $errorMessage . '</div>';
  }
}
?>
<?php
if (isset($_GET['success'])) {
    echo '<div id="success-message" class="success-message">';
    echo '<label class="successo-label"><strong>Sucesso ao entrar</strong></label>';
    echo '<br>';
    echo '<i class="icone fa-solid fa-circle-check"></i>';
    echo '<label class="successo-label2">Bem vindo/a</label>';
    echo '</div>';
  }
?>

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
                <button class="btn"  id="loginBtn"  onclick="login()">Entrar</button>
                <button class="btn" id="registerBtn" onclick="register()">Inscreva-se</button>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="mymenuFunction()"></i>
            </div>
        </nav>

        <div class="form-box">
            <form action="../modules/login.php" method="POST" class="login-container" id="login">
                <div class="top">
                    <span>Não tem uma conta? <a href="#" onclick="register()">Inscreva-se</a></span>
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
                        <label><a href="login_funcionario.php">Login Funcionario</a></label>
                    </div>
                </div>
            </form>
        
            <form action="../modules/register.php" method="POST" class="register-container" id="register">
                <div class="top">
                    <span>Tens uma conta? <a href="#" onclick="login()">Entrar</a></span>
                    <header>Inscreva-se</header>
                </div>
                <div class="two-forms">
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Digite o primeiro nome" name="nome">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Digite o ultimo nome" name="ultimo_nome">
                        <i class="bx bx-user"></i>
                    </div>
                </div>
                <div class="input-box">
                    <input type="email" class="input-field" placeholder="Digite o seu Email" name="email">
                    <i class="bx bx-envelope"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" placeholder="Crie uma palavra-passe" name="senha">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" value="Registrar">
                </div>
                <div class="two-col">
                    <div class="two">
                        <label><a href="#">Termos & Condições</a></label>
                    </div>
                </div>
            </form>
        </div>
    </div>   

   <script>
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");

        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
        }

        function register(){
            x.style.left = "-510px";
            y.style.right = "5px";  
        }

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