<?php 
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_de_marcacao_de_consulta";

$mysqli = new mysqli($host, $user, $password, $bancodedados);
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysql->error );
}
?>