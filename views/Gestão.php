<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Área administrativa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>
    <section id="sidebar">

        <a href="#" class="brand" data-text="hospital"> <i class="fa-solid fa-hospital icon"></i> Hospital Cajueiros</a>
        <ul class="side-menu">
        <?php if(true):?>
        <li class="divider" data-text="doctores">Doctores</li>
        
        <li>
            <a href="Atender_consultas.php">
                <i class="fa-solid fa-hospital-user icon"></i>Atender Consultas</i><i class="fa-solid fa-chevron-right icon-rigth"></i> 
                </a>
                </li>
        <?php endif;?>
        
        <?php if(true):?>

            <li class="divider" data-text="doctores">Secretário Clínico</li>


            <li>
                <a href="#">
                    <i class="fa-solid fa-hospital-user icon"></i>Dados & Validações <i class="fa-solid fa-chevron-right icon-rigth"></i> 
                </a>
                <?php $areas= mysqli_query($mysqli, "SELECT * FROM area"); ?>
                    <ul class="side-dropdown">
      <?php if($areas):?>
        <?php while($area_data = mysqli_fetch_assoc($areas)):?>
            <li><a href="Consulta_validação.php?areaId=<?=$area_data['id']?>"><?=$area_data['nome']?></a></li>
            <?php endwhile; ?>            
        <?php endif;?>
                    </ul>
            </li>

            
            <li class="divider"  data-text="criar">Consultas</li>
            <li><a href="Gerenciamento_de_consultas.php"><i class="fa-solid fa-notes-medical icon"></i>Gerenciamento de Consultas</a></li>


            <li class="divider"  data-text="área administrativa">Área Administrativa</li>
            <li><a href="Area.php"><i class="fa-solid fa-list-ol icon"></i>Área</a></li>
            <li><a href="Administradores.php"> <i class="fa-solid fa-users icon"></i>Adminstradores</a></li>
                 
            <?php endif;?>
            <li class="divider"  data-text="Voltar ou sair">Voltar ou sair</li>
            <li><a href="painel.php"><i class="fa-solid fa-arrow-left-long icon"></i>Voltar</a></li>
            <li><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket icon"></i>Sair</a></li>        
        </ul>
    </section>
        <div class="barra">A</div>
        <label class="Admin" >Bem vindo/a</label>
        <label class="admin2" >A área administrativa</label>
    
    <script src="../public/js/Gestão.js"></script> 
</body>
</html>