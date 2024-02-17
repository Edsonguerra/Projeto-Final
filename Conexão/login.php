<?php
//configurar as credencias
$host="localhost";
$username="usuario";
$password="senha" ;
$database="cajueiros";
//estabelcer a conexao
$conn= new mysqli ($host, $username, $password, $database);
// Verificar a conexão
if ($conn-> connect_error) {
    die("Erro de conexão");
}
echo"Conexão bem sucedida";
//Fechar a conexão
$conn-> close();
?>
