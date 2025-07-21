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
                <a href="views/Consulta2.php">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <span class="nav-item">Consultar</span>
                </a>
            </li>
            <li>
                <a href="views/Ajuda.php">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <span class="nav-item">Ajuda</span>
                </a>
            </li>
            <?php if(isset($_SESSION['doctor']) || isset($_SESSION['funcionario'])): ?>
            <li>
                <a href="Gestão.php">
                    <i class="fa-solid fa-users"></i>
                    <span class="nav-item">Gestão</span>
                </a>
            </li>
            <?php endif;?> 
        </ul>
    </div>