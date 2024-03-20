<?php
//configurar as credencias
$localhost="localhost";
$username="usuario";
$password="" ;
$database="cddstro";

//estabelcer a conexao
$conn= new mysqli ($localhost, $username, $password, $database);
// Verificar a conexão

if ($conn-> connect_error) {
    die("Erro de conexão");
   
}

echo"Conexão bem sucedida";
//Fechar a conexão
$conn-> close();

// Conectar ao banco de dados
$db = mysqli_connect("localhost", "root", "", "mydb");

// Executar consulta
$query = "SELECT * FROM users";
$result = mysqli_query($db, $query);

// Exibir os resultados
while ($row = mysqli_fetch_assoc($result)) 
  echo "<p>Nome: " . $row["name"] . "</p>";
  echo "<p>Email: " . $row["email"] . "</p>";
}

$username = $_POST['username'];
$password = $_POST['password'];

// Conectar ao banco de dados
$db = mysqli_connect("localhost", "root", "", "mydb");

// Validar credenciais
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) > 0) {
  // Credenciais válidas
  // Redirecionar para a página inicial
  header("Location: https://www.exemplo.com/index.html");
} else {
  // Credenciais inválidas
  // Exibir mensagem de erro
  echo "Credenciais inválidas.";
}

?>

?>
