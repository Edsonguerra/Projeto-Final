<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="caddstro";

$conexao = mysqli_connect($host,$user,$passw,$bancodedados);

if($conexao->connect_error){
    die("Erro na conexão".$conexao->connect_error);
}else{
    echo "<h1>Conexão Feita com sucersso!</h1>";
}

$sql="SELECT * FROM user";
$usuarios=$conexao->query($sql);

echo var_dump($usuarios);
