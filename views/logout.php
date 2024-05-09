<?php


if (!isset($_SESSION)) {
    session_start();
}

session_destroy();
echo "Você foi desconectado com sucesso!";
header("Location: login.php");
?>