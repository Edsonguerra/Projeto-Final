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
                <a href="Consulta.php">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <span class="nav-item">Consultar</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <span class="nav-item">Ajuda</span>
                </a>
            </li>
            <li>
                <a href="Gestão.php">
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
            <h2>Marque <br> agora mesmo!</h2>
            <h3>A tua consulta ou análise</h3>
            <h4>Bem vindo/a</h4>
        </div> 

<!------------------------------------- Consultas -------------------------------------------->
        <?php
            $consulta = mysqli_query($mysqli, "SELECT * FROM consulta"); 
        ?>

        <form action="../modules/Formulário_de_consulta.php" method="POST">
            <div class="Selecionar">
                <div class="selecionar-botao">
                    <span class="texto">Selecionar Consulta</span>
                    <span class="down-arrow">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span> 
                </div>
                <?php if ($consulta->num_rows > 0): ?> 
                    <ul class="lista-consulta">
                    <?php while ($row = $consulta->fetch_assoc()) :?> 
                        <li class="lista">
                            <img class="img" width="35 " src="../public/assets/css/img/43493.png" alt="">
                            <span class="checked"><i class="fa-solid fa-check check-icon"></i></span>
                            <span class="primeiro-lista"><?php echo $row["nome"]?></span>
                            <input type="checkbox" name="consulta[]" value="<?php echo $row['id_da_consulta']; ?>" class="consulta-checkbox">
                        </li>
                    <?php endwhile;?>      
                    </ul>   
                    <button class="button" type="submit">Marcar Consulta</button>
                <?php else:?>
                    <p>Consultas indisponíveis</p>     
                <?php endif;?>     
            </div>    
        </form>

<!------------------------------------- Conteúdo -------------------------------------------->
        <div class="contudo-abaixo">
            <h4 class="Hosp">Hospital dos Cajueiros</h4>
            <img src="../public/assets/css/img/fundo2.jpg" width="103.3%">
            <h5 class="Infor">Informações</h5>
            <a class="Sobre" href="views/Sobre.php">Sobre</a>
            <a class="Contacto" href="views/Contacto.php">Contacto</a>
            <a class="Termos" href="views/Termos.php">Termos</a>
            <a class="Politica" href="views/Politica.php">Política de privacidade</a>
        </div>
    </div>

    <script src="../public/js/Index.js"></script> 
</body>
</html>