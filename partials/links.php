<?php if($title=="Pagina Inicial"):?>
<li><a href="<?= dirname($_SERVER['PHP_SELF']) . '/views/about.php'?>" class="link">Acerca</a></li>
<li><a href="<?= dirname($_SERVER['PHP_SELF']) . '/views/services.php'?>" class="link">Serviços</a></li>
<li><a href="<?= dirname($_SERVER['PHP_SELF']) . '/views/login.php'?>" class="link">Login</a></li>
<?php else: ?>
    <li><a href="./about.php" class="link">Acerca</a></li>
<li><a href="./services.php" class="link">Serviços</a></li>
<li><a href="./login.php" class="link">Login</a></li>
<?php endif?>
