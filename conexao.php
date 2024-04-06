<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="consultas";

$mysqli = new  mysqli($host, $user, $password, $bancodedados);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysql->error );
}


?>