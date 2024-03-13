<?php
$host="localhost";
$user="root";
$password="";
<<<<<<< HEAD
$bancodedados ="cadastro";
=======
$bancodedados ="caddstro";
>>>>>>> 50952d63c54daa3cacb45933c201bedc6bc5edd6

$conexao = mysqli_connect($host,$user,$password,$bancodedados);

if($conexao->connect_error){
    die("Erro na conexão".$conexao->connect_error);
}else{
<<<<<<< HEAD
    echo "<h1>Conexão Feita com sucersso!</h1>";
=======
    echo "<h1>Conexão Feita com sucesso!</h1>";
>>>>>>> 50952d63c54daa3cacb45933c201bedc6bc5edd6
}

$sql="SELECT * FROM user";
$usuarios=$conexao->query($sql);

if ($usuarios->num_rows > 0) {
    while ($row = $usuarios->fetch_assoc()) {
        echo "nome:".$row["nome"]."<br>";
<<<<<<< HEAD
    }
} 

else {
    echo "0 results";
}
=======
        echo "email:".$row["email"]."<br>";
        echo "senha:".$row["senha"]."<br>";
    }
} else {
    echo "0 results";
}
    
>>>>>>> 50952d63c54daa3cacb45933c201bedc6bc5edd6
