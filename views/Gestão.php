<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Gestão.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <section id="sidebar">

        <a href="#" class="brand" data-text="hospital"> <i class="fa-solid fa-hospital icon"></i> Hospital Cajueiros</a>
        <ul class="side-menu">

            <li class="divider" data-text="doctores">Doctores</li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-user-doctor icon"></i>Consultas & Especialidades <i class="fa-solid fa-chevron-right icon-rigth"></i> 
                </a>
                    <ul class="side-dropdown">
                        <li><a href="#">Cardiologista</a></li>
                        <li><a href="#">Dentista</a></li>
                        <li><a href="#">Fisioterapeuta</a></li>
                        <li><a href="#">Nutricionista</a></li>
                        <li><a href="#">Urologista</a></li>
                    </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa-solid fa-hospital-user icon"></i>Dados & Validações <i class="fa-solid fa-chevron-right icon-rigth"></i> 
                </a>
                    <ul class="side-dropdown">
                        <li><a href="#">Cardiologista</a></li>
                        <li><a href="#">Dentista</a></li>
                        <li><a href="#">Fisioterapeuta</a></li>
                        <li><a href="#">Nutricionista</a></li>
                        <li><a href="#">Urologista</a></li>
                    </ul>
            </li>

            
            <li class="divider"  data-text="criar">Consultas & análises</li>
            <li><a href="Gerenciamento_de_consultas.php"><i class="fa-solid fa-notes-medical icon"></i>Gerenciamento de Consultas</a></li>
            <li><a href="#"><i class="fa-solid fa-notes-medical icon"></i>Gerenciamento de Análises</a></li>


            <li class="divider"  data-text="área administrativa">Área Administrativa</li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-users icon"></i>Adminstradores <i class="fa-solid fa-chevron-right icon-rigth"></i> 
                </a>
                    <ul class="side-dropdown">
                        <li><a href="#">Geral</a></li>
                        <li><a href="#">Outros</a></li>
                    </ul>
            </li>

            <li class="divider"  data-text="área administrativa">Voltar ou sair</li>
            
            <li><a href="painel.php"><i class="fa-solid fa-notes-medical icon"></i>Voltar</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-notes-medical icon"></i>Sair</a></li>
            
                

        </ul>
    </section>

    <script src="../public/js/Gestão.js"></script> 
</body>
</html>