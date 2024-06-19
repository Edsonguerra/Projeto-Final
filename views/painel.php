<?php include('../modules/protect.php');?> 
<?php include('../modules/conexao.php');?>
<?php include('../components/header.php');?>

<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Cajueiros</title>
    <link rel="stylesheet" href="style.css">
</head> -->

<body class="panelContainer bg-image-1" id="body"> 
    <div class="overlay"></div>
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

    <div class="main-content">
        <div class="container">
            <h2> Não perca <br> tempo!</h2>
            <h3>Marque agora mesmo a tua consulta!</h3>
            <h4>Bem vindo/a</h4>
            <a href="#selecionarConsulta" id="marcaConsultaBtn" class="marcar" style="padding:6px; text-decoration:none;">Marcar Consulta</a>
        </div> 

        <div class="cabeça">
            <label class="contacto">Contacto</label>
            <label class="ajuda">Ajuda</label>
            <a href="#selecionarConsulta" id="marcaConsultaBtn" class="marca_consulta" style="padding:6px; text-decoration:none;">Marcar Consulta</a>
        </div>

        <?php
            $consulta = mysqli_query($mysqli, "SELECT * FROM consulta"); 
        ?>

        <form action="../modules/Formulário_de_consulta.php" method="POST" onsubmit="return validarFormulario()">
            <div class="Selecionar" id="selecionarConsulta">
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
                            <input type="checkbox" name=<?=$row["nome"]?>  value="<?php echo $row['id_da_consulta'];?>" class="consulta-checkbox">
                        </li>
                    <?php endwhile;?>   
                    <button class="button" type="submit">Marcar Consulta</button>  
                    </ul>   
                <?php else:?>
                    <p>Consultas indisponíveis</p>     
                <?php endif;?>     
            </div>    
        </form>

        <script>
            function validarFormulario(){
                if(document.querySelectorAll(".consulta-checkbox")){
                    var checkboxes = document.querySelectorAll(".consulta-checkbox");

var peloMenosUmSelecionado = false;

for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
        peloMenosUmSelecionado = true;
        break;
    }
}

if (!peloMenosUmSelecionado) {
    alert("Por favor, selecione pelo menos uma consulta.");
    return false;
}

return true;
}

document.getElementById('marcaConsultaBtn').addEventListener('click', function() {
document.getElementById('selecionarConsulta').scrollIntoView({ behavior: 'smooth' });
});
                }
              
        </script>

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

    <script src="../public/js/index.js"></script> 
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        };

        // function changeBackgroundImage() {
        //     const body = document.querySelector('#body');
        //     if(body.classList.contains('bg-image-1')){
        //         body.classList.remove('bg-image-1');
        //         body.classList.add('bg-image-2');
        //     }
        //     if(body.classList.contains('bg-image-2')){
        //         body.classList.remove('bg-image-2');
        //         body.classList.add('bg-image-1');
        //     }
        // }

        
        // setTimeout(() => {
        //     Interval
        // }, timeout);(changeBackgroundImage,1000); 
    </script>
</body>
</html>
