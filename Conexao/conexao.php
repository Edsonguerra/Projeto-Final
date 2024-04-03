<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="cadastro";

$conexao = mysqli_connect($host,$user,$password,$bancodedados);

if($conexao->connect_error){
    die("Erro na conexão".$conexao->connect_error);
}else{
    echo "<h1>Conexão Feita com sucesso!</h1>";
}

$sql="SELECT * FROM user";

$usuarios=$conexao->query($sql);

if ($usuarios->num_rows > 0) {
    while ($row = $usuarios->fetch_assoc()) {
        echo "nome:".$row["nome"]."<br>";
        echo "email:".$row["email"]."<br>";
        echo "senha:".$row["senha"]."<br>";
    }
} else {
    echo "0 results";
}
    
