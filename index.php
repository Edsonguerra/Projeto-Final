<?php include('components/header.php');?>
<?php include('modules/conexao.php');?>
<?php $tiposdeconsultas = mysqli_query($mysqli, "SELECT * FROM tipos_de_consultas"); ?>
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


    <div class="Conteudos-de-baixo">
        <img src="public/assets/css/img/EXAME.jpg">
        <h4 class="Hosp">Hospital dos Cajueiros</h4>
        <h5 class="Infor">Informações</h5>
        <a class="Sobre" href="views/Sobre.php">Sobre</a>
        <a class="Contacto" href="views/Contacto.php">Contacto</a>
        <a class="Termos" href="views/Termos.php">Termos</a>
        <a class="Politica" href="views/Politica.php">Politica de privacidade</a>
    </div>

    <script src="public/js/index.js"></script>
</body>
</html>