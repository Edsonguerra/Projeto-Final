<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/recupera_senha.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                    <span class="texto" >Calma, nós podemos ajudá-lo.</span>
                    <span class="texto2" > Insira o seu e-mail para identificarmos a sua conta.</span>
                    <header>Recuperar Senha</header>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Digite o seu email" name="email">
                    <i class="bx bx-user"></i>
                    
                <div class="input-box">
                    <input type="submit" name="entrar" class="submit" value="Continuar">
                </div>
                <div class="two-col">
                    <div class="two">
                        <label class="Texto_continua" >Continuar com outra conta?</label>
                        <a href="login.php">
                        <button class="Login"> Fazer login</button>
                        </a>
                    </div>
                </div>
            </form>
        
    

</body>
</html>