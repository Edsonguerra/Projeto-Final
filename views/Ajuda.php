<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Ajudaa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Electrolize&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&family=Squada+One&family=Tinos:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Encode+Sans+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Gudea:ital,wght@0,400;0,700;1,400&family=Inter:wght@100..900&family=Jura:wght@300..700&family=Noto+Sans+Mono:wght@100..900&family=PT+Mono&family=Sawarabi+Gothic&family=Teko:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Glegoo:wght@400;700&family=M+PLUS+1+Code:wght@100..700&family=Quattrocento:wght@400;700&family=Roboto+Flex:opsz,wght@8..144,100..1000&display=swap" rel="stylesheet">
    <title>Ajuda</title>
</head>
<body class="panelContainer bg-image-1" >

<?php include('../components/sidebar.php');?>

    <div class="main-content">
        <div class="container">
            <label class="sobre-nos" >Central de <p>ajuda!</p> </label>
            <label class="resposta">Aqui você encontrará respostas para</label>
            <label class="perguntas" >as perguntas mas frequentes!</label> 
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
            <div class="help-section">
                <h2>Bem-vindo à seção de Ajuda!</h2>
                <p>Aqui você encontrará respostas para as perguntas mais frequentes e orientações sobre como utilizar nosso site de marcações de consultas online.</p>

                <h3>1. Como criar uma conta?</h3>
                <ol>
                    <li>Clique no botão "Login" na página inicial.</li>
                    <li>Preencha o formulário de cadastro com suas informações pessoais, como primeiro nome e ultimo nome, e-mail.</li>
                    <li>Crie uma senha segura.</li>
                    <li>Clique em "Registrar" para completar o cadastro.</li>
                    <li>E você receberá uma notificação de "Registro realizado com sucesso".</li>
                </ol>

                <h3>2. Como marcar uma consulta?</h3>
                <ol>
                    <li>Faça login na sua conta.</li>
                    <li>Navegue até a seção "Selecionar consulta".</li>
                    <li>Selecione a consulta e clica no botão marcar consulta.</li>
                    <li>Preencha o formulário de consulta, todos os campos são obrigatórios a serem preenchidos.</li>
                    <li>Clica no botão "Enviar".</li>
                    <li>Você receberá uma notificação de "Consulta marcada com sucesso".</li>
                </ol>

                <h3>3. Como visualizar minhas consultas agendadas?</h3>
                <p>Para visualizar suas consultas agendadas:</p>
                <ol>
                    <li>Faça login na sua conta.</li>
                    <li>Vá para o menu e clica em "Consultar".</li>
                    <li>Aqui, você a tua consulta e a de outras pessoas.</li>
                </ol>

                <h3>4. Como cancelar uma consulta?</h3>
                <p>Para cancelar uma consulta, siga os passos abaixo:</p>
                <ol>
                    <li>Faça login na sua conta.</li>
                    <li>Vá para o menu e clica em "Consultar".</li>
                    <li>Encontre a consulta que deseja cancelar e clique em "Cancelar".</li>
                    <li>Confirme o cancelamento.</li>
                </ol>

                <h3>5. Como entrar em contato com o suporte?</h3>
                <p>Se você precisar de ajuda adicional ou tiver alguma dúvida:</p>
                <ul>
                    <li>Envie um e-mail para: suporte@hospitalcajueiros.com</li>
                    <li>Ligue para: 939/826/638</li>
                </ul>

                <h3>6. Dicas para usar o site de forma eficiente</h3>
                <ul>
                    <li>Certifique-se de manter suas informações pessoais atualizadas.</li>
                    <li>Verifique seu e-mail regularmente.</li>
                    <li>Utilize navegadores atualizados para uma melhor experiência de navegação.</li>
                    <li>Se possível, cancele consultas com antecedência para liberar vagas para outros pacientes.</li>
                </ul>

                <p>Estamos aqui para ajudar! Nossa equipe de suporte está dedicada a fornecer a melhor experiência possível. Se você tiver qualquer outra dúvida ou precisar de assistência, não hesite em entrar em contato conosco.</p>
            </div>
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
