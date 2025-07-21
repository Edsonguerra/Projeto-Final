<?php include('components/header.php');?>
<?php include('modules/conexao.php');?>
<header>
        <h1 class="Hospital">Hospital dos cajueiros</h1>
   <nav class="icones">
    <a href="views/Sobre.php">Sobre</a>
    <a href="views/Sobre.php">Ajuda</a>
        <a href="views/login.php">
        <button class="botaologin">Login</button>
        </a>
   </nav>  
    </header>
    <div class="name">
        <h2>Seja bem vindo ao site de <p> marcações de consultas online <p> do Hospital dos Cajueiros!</h2>
    </div>
    <div class="Conteudo">
        <h3>Cadastre-se agora mesmo e marque a tua consulta ou análise de uma forma <p></p> fácil e segura.</h3>
    </div>
       
<!------------------------------------- Consultas -------------------------------------------->

<?php
                $consulta = mysqli_query($mysqli, "SELECT * FROM consulta"); 
            ?>


            <form action="views/login.php">
                <div class="Selecionar">
                <div class="selecionar-botao">
                    <span class="texto">Consultas disponíveis</span>
                    <span class="down-arrow">
                    <i class="fa-solid fa-chevron-down"></i>
                    </span> 
                </div>
                <ul class="lista-consulta">
                    <?php if ($consulta->num_rows > 0): ?> 
                    <?php while ($row = $consulta->fetch_assoc()) :?> 
                <li class="lista">
                    <img class="img" width="35 " src="public/assets/css/img/43493.png" alt="">
                    <span class="primeiro-lista"><?php echo $row["nome"]?></span>
                    <input type="checkbox" name="nome[]" value="Consulta_de_Dermatologia">
                </li>
                <?php endwhile;?>     
                    <input class="button" type="submit" value="Cadastra-se agora mesmo!"> 
                <?php else:?>
                    <p>Consultas indisponiveis</p>     
                <?php endif;?>     
                </ul>   
                </div>    
            </form>

            <?php
        $analise = mysqli_query($mysqli, "SELECT * FROM analise"); 
    ?>

<!------------------------------------- Análises -------------------------------------------->

        <form action="views/login.php">
            <div class="Selecionar2">
                <div class="selecionar-botao2">
                    <span class="texto2">Análises disponíveis</span>
                    <span class="down-arrow">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span> 
                </div>
                <ul class="lista-consulta2">
                    <?php if ($analise->num_rows > 0): ?> 
                    <?php while ($row = $analise->fetch_assoc()) :?> 
                <li class="lista2">
                    <img class="img" width="35 " src="public/assets/css/img/43493.png" alt="">
                    <span class="primeiro-lista2"><?php echo $row["nome"]?></span>
                    <input type="checkbox" name="nome[]" value="Analise_de_Paludismo">
                </li>
                <?php endwhile;?>     
                    <input class="button2" type="submit" value="Cadastra-se agora mesmo!"> 
                <?php else:?>
                    <p>Análises indisponiveis</p>     
                <?php endif;?>     
                </ul>   
            </div>   
        </form>







    <div class="Conteudos-de-baixo">
        <img src="public/assets/css/img/fundo1.jpg" width="100%" >
        <h4 class="Hosp">Hospital dos Cajueiros</h4>
        <h5 class="Infor">Informações</h5>
        <a class="Sobre" href="views/Sobre.php">Sobre</a>
        <a class="Contacto" href="views/Contacto.php">Contacto</a>
        <a class="Termos" href="views/Termos.php">Termos</a>
        <a class="Politica" href="views/Politica.php">Politica de privacidade</a>
    </div>

    <script src="public/js/disponivel.js"></script>  
    <script src="public/js/disponivel2.js"></script> 

</body>
</html>