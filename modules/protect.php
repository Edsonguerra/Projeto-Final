<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_user'])) {
    die("Você não pode acessar essa página porque não estás logado. <p><a href=\"index.html\">Entrar</a></p>");
}
?>
