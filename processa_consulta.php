PHP
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "site_marcação_de_consulta";

include_once('conexao.php');

try {

  $conn = new mysqli($host, $user, $password, $dbname);

  // Validar campo nome
  if (!isset($_POST['consulta']) || empty($_POST['consulta'])) {
    echo "Erro: Consulta não informada.";
    exit;
  }
  $consulta = $_POST['consulta'];

  // Validar consulta
  $consultas = array(
    "Consulta_de_Dermatologia",
    "Consulta_de_Pediatria",
    "Consulta_de_Hematologia",
    "Consulta_de_Ginecologia",
    "Consulta_de_Estomatologia"
  );

  if (!in_array($consulta, $consultas)) {
    echo "Erro: Consulta inválida.";
    exit;
  }

  if (isset($_POST['pesquisar'])) {
    // Consulta de pesquisa
    $stmt = $conn->prepare("SELECT * FROM consultas WHERE nome = ?");
    $stmt->bind_param("s", $consulta);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      $row = $result->fetch_assoc();
      echo "Consulta selecionada: " . $row['nome'];
    } else {
      echo "Consulta não encontrada.";
    }

    $stmt->close();

  } elseif (isset($_POST['primeiro-lista'])) {
    // Consulta de inserção
    $stmt = $conn->prepare("INSERT INTO consultas (nome) VALUES (?)");
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

} catch (mysqli_sql_exception $e) {
  echo "Erro na consulta: " . $e->getMessage();
} finally {

  if ($conn) {
    $conn->close();
  }
}
?>