<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $consulta = isset($_POST['primeiro-lista']) ? $_POST['primeiro-lista'] : null;


  if ($consulta) {


    $sql = "INSERT INTO consultas (nome) VALUES (?)";
    $stmt = $conn->prepare($sql);


    $stmt->bind_param("s", $consulta);


    $stmt->execute();


    if ($stmt->affected_rows > 0) {
      echo "Consulta criada com sucesso!";
    } else {
      echo "Erro ao criar consulta.";
    }


    $stmt->close();
  } else {
    echo "Nenhuma consulta selecionada.";
  }
}

?>