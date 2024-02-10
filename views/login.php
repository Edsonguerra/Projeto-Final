<?php
$title="Tela de Autenticação";
require_once '../partials/header.php';
?>
        <div class="nav-button">
             <button class="btn enter-btn" id="LoginBtn" onclick="login()">Entrar</button>
             <button class="btn" id="Registerbtn" onclick="register()">Inscreva-se</button>
        </div>
        <div class="nav-menu-btn">
            <i class="bx bx-menu" onclick="myMenufunction()"></i>
        </div>
<!---------------------------------- Form box ---------------------------------------->

    <div class="form-box"> 
          <!------------------------------ login form --------------------------------------------->
          <?php require_once '../partials/loginForm.php' ?>    
        <!------------------------------ registration form --------------------------------------------->
        <?php require_once '../partials/registrationForm.php'?>    
</div>

<?php require_once '../partials/footer.php'?>
