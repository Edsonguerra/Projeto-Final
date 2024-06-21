<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Contactoooooo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&family=Squada+One&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Gudea:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900&family=Jura:wght@300..700&family=Noto+Sans+Mono:wght@100..900&family=PT+Mono&family=Sawarabi+Gothic&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Contacto</title>
</head>
<body class="panelContainer bg-image-1" >

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
            <label class="sobre-nos" >Contacte-nos</p> </label>
            <label class="duvida" ></p>Se você tiver alguma dúvida</label>
            <button id="confiraBtn" class="marcar">Confira abaixo!</button>
        </div> 

        <div class="cabeça">
            <label class="hosp" >Hospital Cajueiros</label>
            <div class="itens" >
                <a class="contacto" href="Contacto.php">Contacto</a>
                <a class="ajuda" href="Ajuda.php">Ajuda</a>           
                <a class="sobre1" href="Sobre.php">Sobre</a>
            </div>
        </div>

        <main>
            <section class="contacto-info">
                <h2>Estamos aqui para ajudar!</h2>
                <p>Se você tiver alguma dúvida, sugestão ou precisar de assistência, entre em contato conosco pelos seguintes meios:</p>

                <h3>E-mail</h3>
                <p>Para questões gerais, suporte técnico ou informações sobre consultas, envie um e-mail para:</p>
                <p><a href="#">suporte@hospitalcajueiro.com</a></p>

                <h3>Telefone</h3>
                <p>Nossa equipe de atendimento está disponível para responder suas perguntas e fornecer suporte por telefone de segunda a sexta-feira, das 8h às 23h:</p>
                <p>939/826/638</p>

                <h3>Endereço</h3>
                <p>Se você preferir nos visitar pessoalmente ou enviar correspondência, nosso endereço é:</p>
                <address>
                    Hospital Cajueiros<br>
                    Angola/Luanda<br>
                    Bairro: Cazenga<br>
                    Zamba 1
                </address>
            </section>

            <section class="lembre-se">
                <h3>Lembre-se</h3>
                <p>Antes de entrar em contato, recomendamos que você verifique nossa seção de Ajuda, onde respondemos às perguntas mais frequentes sobre nosso serviço.</p>
            </section>
        </main>
    
    
        <div class="contudo-abaixo">
                <h4 class="Hosp">Hospital dos Cajueiros</h4>
                <img src="../public/assets/css/img/fundo2.jpg" width="103.3%">
                <h5 class="Infor">Informações</h5>
                <a class="Sobre" href="Sobre.php">Sobre</a>
                <a class="Contacto" href="Contacto.php">Contacto</a>
                <a class="Termos" href="Termos.php">Termos de uso</a>
                <a class="Politica" href="Politica.php">Política de privacidade</a>
            </div>
        </div>

    </div>


    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        };

        const images = ['bg-image-1', 'bg-image-2']; 
        let currentImageIndex = 0;

        function changeBackgroundImage() {
            const body = document.querySelector('body');
            body.classList.remove(images[currentImageIndex]);
            currentImageIndex = (currentImageIndex + 1) % images.length;
            body.classList.add(images[currentImageIndex]);
        }

        setInterval(changeBackgroundImage, 5000); 


    </script>


</body>
</html>