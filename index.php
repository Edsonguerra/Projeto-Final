<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "cadastro";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Falha na conexão: " . mysqli_connect_error());
}

if (isset($_GET['consulta'])) {
  $consulta = $_GET['consulta'];

  $sql = "SELECT * FROM consultas WHERE nome = '$consulta'";

  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    echo "Consulta selecionada: " . $row['Consulta de Dermatologia'];
    echo "Consulta selecionada: " . $row['Consulta de Pediatria'];
    echo "Consulta selecionada: " . $row['Consulta de Hematologia'];
    echo "Consulta selecionada: " . $row['Consulta de Genecologia'];
    echo "Consulta selecionada: " . $row['Consulta de Estomatologia'];
  
  } else {
    echo "Consulta não encontrada.";
  }
}
?>