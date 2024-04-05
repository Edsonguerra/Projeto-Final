<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_marcação_de_consulta";

$mysqli = new  mysqli($host, $usuarios, $password, $bancodedados);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysql->error );
}

?>