
<?php
//configurar as credencias
$host="localhost";
$username="usuario";
$password="senha" ;
$database="cajueiros";

//estabelcer a conexao
$conn= new mysqli ($host, username, $password, $database);
// Verificar a conexão

if ($conn-> connect_error) {
    die("Erro de conexão");
   $conn -> connect_error);
}

echo"Conexão bem sucedida";
//Fechar a conexão
$conn-> close();
?>

<?php
//estabelcer a conexao
try{
    $conn=new
    PDO("mysql: host= $host; db name = $database", $username, $password);
    echo"conexão bem sucedida";
}
catch("PDOException $e");
die("Erro de conexão:");
$e -> getmessage();
//Fechar conexão
$conn=null;
?>

