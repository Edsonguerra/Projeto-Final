<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

try {

  $conn = mysqli_connect($servername, $username, $password, $dbname);


  if (isset($_POST['consulta'])) {
    $consulta = $_POST['consulta'];


    $consultas = array(
      "Consulta de Dermatologia",
      "Consulta de Pediatria",
      "Consulta de Hematologia",
      "Consulta de Ginecologia",
      "Consulta de Estomatologia"
    );

    if (in_array($consulta, $consultas)) {

    
      $stmt = $conn->prepare("SELECT * FROM consultas WHERE nome = ?");
      $stmt->bind_param("s", $consulta);

    
      $stmt->execute();

  
      $result = $stmt->post_result();

      if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

    
        echo "Consulta selecionada: " . $row['nome'];

      } else {
        echo "Consulta não encontrada.";
      }

      $stmt->close();
    } else {
      echo "Consulta inválida.";
    }
  }
} catch (mysqli_sql_exception $e) {
  echo "Erro na consulta: " . $e->getMessage();
} finally {

  if ($conn) {
    $conn->close();
  }
}
?>