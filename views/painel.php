<?php include('../modules/protect.php');?> 
<?php include('../modules/conexao.php');?>
<?php include('../components/header.php');?>


<!------------------------------------- Menu  -------------------------------------------->
<body class="panelContainer">
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
                <a href="Formulario_de_consulta.php">
                    <i class="fa-solid fa-align-left"></i>
                    <span class="nav-item">Formulário</span>
                </a>
            </li>

            <li>
                <a href="">
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
        <span class="texto-bem-vindo"> <br> Bem vindo/a</span> <span class="nome-usuario"> <br> <?php echo $_SESSION['nome']; ?>!</span>
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
        }, 2000); 
    }
    });



<!------------------------------------- Consultas -------------------------------------------->

    </script>

    <?php
        $tiposdeconsultas = mysqli_query($mysqli, "SELECT * FROM tipos_de_consultas"); 
    ?>


    <form action="processa_consulta.php" method="POST">
        <div class="Selecionar">
            <div class="selecionar-botao">
                <span class="texto">Selecionar Consulta</span>
                <span class="down-arrow">
                    <i class="fa-solid fa-chevron-down"></i>
                </span> 
            </div>
            <ul class="lista-consulta">
                <?php if ($tiposdeconsultas->num_rows > 0): ?> 
                <?php while ($row = $tiposdeconsultas->fetch_assoc()) :?> 
            <li class="lista">
                <img class="img" width="35 " src="../public/assets/css/img/43493.png" alt="">
                <span class="checked"><i class="fa-solid fa-check check-icon"></i></span>
                <span class="primeiro-lista"><?php echo $row["nome"]?></span>
                <input type="checkbox" name="tipo_consulta[]" value="Consulta_de_Dermatologia">
            </li>
            <?php endwhile;?>     
                <input class="button" type="submit" value="Marcar Consulta"> 
            <?php else:?>
                <p>Consultas indisponiveis</p>     
            <?php endif;?>     
            </ul>   
        </div>    
    </form>



    <script src="../public/js/index.js"></script> 
</body>
</html>