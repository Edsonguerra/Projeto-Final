<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
    content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <?php if($title=="Pagina Inicial"):?>
        <link rel="stylesheet" href="./public/assets/css/style.css">
        <?php else: ?>
        <link rel="stylesheet" href="../public/assets/css/style.css">
    <?php endif?>
</head>
<body>
    <div class="wrapper">
    <nav class="nav">
        <div class="nav-hospital">
        <h3>Hospital Cajueiros</h3>
        </div>
        <div class="nav-menu" id="navMenu">
        <ul>
        <?php include_once 'links.php'?>
        </ul>    
        </div>
    </nav>

</div>