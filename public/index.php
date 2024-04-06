<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>
<body>
<div class="wrapper">  
    <nav class="nav">
        <div class="nav-hospital">
            <p>Hospital dos Cajueiros</p>
        </div>
        <div class="nav-menu">
            <ul>
                <li><a href="#" class="link">Acerca</a></li>
                <li><a href="#" class="link">Contacto</a></li>
                <li><a href="#" class="link">Ajuda</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn" id="loginBtn" onclick="login()">Entrar</button>
            <button class="btn" id="registerBtn" onclick="register()">Inscreva-se</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="mymenuFunction()"></i>
        </div>
    </nav>
<!------------------------------------- Form box   -------------------------------------------->
    <div class="form-box">

        <!------------------------------------- login box   -------------------------------------------->
        <form action="login.php" method="POST" class="login-container" id="login">
            <div class="top">
                 <span>Não tem uma conta? <a href="#" onclick="register()">Inscreva-se</a></span>
                 <header>Login</header>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Digite o seu email" name="email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Digite a tua palavra-passe" name="senha">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Entrar">
            </div>
            <div class="two-col">
                <div class="two">
                    <label><a href="#">Esqueceu a senha?</a></label>
                </div>
            </div>
        </form>
    
        <!------------------------------------- Register box   -------------------------------------------->
        <form action="register.php" method="POST" class="register-container" id="register">
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
                <input type="text" class="input-field" placeholder="Digite o seu Email" name="email">
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
</script>

</body>
</html>