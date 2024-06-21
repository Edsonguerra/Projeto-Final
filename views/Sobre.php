<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Sobreee.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&family=Squada+One&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Gudea:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900&family=Jura:wght@300..700&family=Noto+Sans+Mono:wght@100..900&family=PT+Mono&family=Sawarabi+Gothic&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Sobre</title>
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
            <label class="sobre-nos" >Sobre nós</label>
            <label class="curioso" >Curioso/a para saber mais sobre nós?</label>

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
            <section>
                <h2>Sobre Nós</h2>
                <p>
                    Bem-vindo ao nosso site de marcações de consultas online, criado especialmente para facilitar o acesso dos pacientes aos serviços do hospital Cajueiros. Nosso objetivo é tornar a experiência de agendamento de consultas mais prática, rápida e acessível, a qualquer hora e em qualquer lugar.
                </p>
            </section>

            <section class="facilidade">
                <h3>Facilidade e Conveniência</h3>
                <p>
                    Com o nosso sistema, você pode marcar suas consultas a qualquer momento, seja pelo telefone, computador ou tablet. Nossa plataforma intuitiva e fácil de usar permite que você visualize suas consultas agendadas, confira quantas pessoas estão na lista de espera e, se necessário, cancele suas consultas com apenas alguns cliques.
                </p>
            </section>

            <section class="transparency-control">
                <h3>Transparência e Controle</h3>
                <p>
                    Oferecemos total transparência para os pacientes, permitindo que acompanhem o status de suas consultas em tempo real. Além disso, os administradores do hospital têm a capacidade de criar e gerenciar consultas de maneira eficiente, garantindo um atendimento mais organizado e ágil.
                </p>
            </section>

            <section class="missão">
                <h3>Nossa Missão</h3>
                <p>
                    Nossa missão é proporcionar um atendimento de qualidade, descomplicado e acessível para todos. Acreditamos que, ao modernizar o processo de marcação de consultas, estamos contribuindo para um sistema de saúde mais eficiente e satisfatório.
                </p>
            </section>

            <section class="suporte">
                <h3>Suporte e Ajuda</h3>
                <p>
                    Estamos aqui para ajudar! Se você tiver qualquer dúvida ou precisar de assistência, nossa equipe de suporte está sempre pronta para oferecer a ajuda necessária.
                </p>
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
