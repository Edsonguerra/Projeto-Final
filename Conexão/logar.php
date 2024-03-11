<?php

if()isset($_POST['Email']) &&!empty($_POST['Email'])isset($_POST['Senha']) &&!empty($_POST['Senha']);{



require'conexao2';
require'Usuario.class.php';

$U =new Usuario();

$login = addslashes($_POST[login]);
$senha = addcslashes($_POST[Email]);





}else{
    header("Location:loginForm.php")
}