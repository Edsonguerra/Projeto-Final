<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_marcação_de_consulta";

$mysqli = new  mysqli($host, $user, $password, $bancodedados);

if($mysqli->error) {
    die("Falha aao conectar ao banco de dados: " . $mysql->error );
}



?>