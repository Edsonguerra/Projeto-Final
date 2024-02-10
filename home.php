<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
    <nav class="nav">
        <div class="nav-hospital">
            <p>Hospital Cajueiros</p>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Acerca</a></li>
                <li><a href="#" class="link">Contacto</a></li>
                <li><a href="#" class="link">Ajuda</a></li>
            </ul>
        </div>
        <div class="nav-button">
             <button class="btn enter-btn" id="LoginBtn" onclick="login()">Entrar</button>
             <button class="btn" id="Registerbtn" onclick="register()">Inscreva-se</button> </button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenufunction()"></i>
        </div>
    </nav>
<!---------------------------------- Form box ---------------------------------------->
    <div class="form-box"> 

                <!------------------------------ login form --------------------------------------------->
                  
                <div class="login-container" id="login">
                    <div class="top">
                        <span>Não tem uma conta? <a href="#" onclick="register()">Inscreva-se</a></span>
                        <header>Login</header>
                    </div>
                    <div class="input-box">
                        <input type="text" class="input-field" placeholder="Digite o seu numero ou email">
                        <i class="bx bx-user"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Digite a sua palavra-passe">
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
                </div>

        <!------------------------------ registration form --------------------------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Já tens uma conta? <a href="#" onclick="login()">Login</a></span>
                <header>Inscreva-se</header>
            </div>
            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Digite o primeiro nome">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Digite o ultimo nome">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Digite o seu email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Crie uma palavra-passe">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Registrar">
            </div>
            <div class="two-col">
                <div class="two">
                    <label><a href="#">Termos & condições</a></label>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

    function myMenufunction() {
        var i = document.getElementById("navMenu");

        if(i.className === "nav-menu") {
            i.className += " responsive"; 
        } else {
            i.className = "nav-menu";
        }
    }

</script>

<script>
    var a = document.getElementById("loginBtn");
    var b = document.getElementById("registerBtn");
    var x = document.getElementById("login");
    var y = document.getElementById("register");

    function login() {
        x.style.left = "4px";
        y.style.right = "-520px";
        a.className += " white-btn";
        b.className = "btn";
        x.style.opacity = 1;
        y.style.opacity = 0;
    }

    function register() {
        x.style.left = "-510px";
        y.style.right = "5px";
        a.className = "btn";
        b.className += " white-btn";
        x.style.opacity = 0;
        y.style.opacity = 1;
    }
</script>
    <link rel="stylesheet" href="public/assets/css/style.css">
</body>
</html>