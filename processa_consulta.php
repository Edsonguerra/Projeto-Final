<?php
$host = "localhost";
$user = "root";
$password = "";
$bancodedados = "site_marcação_de_consulta";

if (isset($_POST['consulta'])) {
  // Conexão com banco de dados (presumindo nomes de colunas corretos)
  $mysqli = mysqli_connect($host, $user, $password, $bancodedados);

  if (!$mysqli) {
    echo "Erro: Não foi possível conectar ao MySQL. " . mysqli_connect_error();
    exit;
  }

  $Consulta_de_Dermatologia = $_POST['Consulta_de_Dermatologia'];
  $Consulta_de_Pediatria = $_POST['Consulta_de_Pediatria'];
  $Consulta_de_Hematologia = $_POST['Consulta_de_Hematologia'];
  $Consulta_de_Ginecologia = $_POST['Consulta_de_Ginecologia'];
  $Consulta_de_Estomatologia = $_POST['Consulta_de_Estomatologia'];

  $sql = "INSERT INTO tipos_de_consultas (consulta_tipo) VALUES (?)";

  $stmt = mysqli_prepare($mysqli, $sql);

  if (!$stmt) {
    echo "Erro: Não foi possível preparar a instrução SQL.";
    exit;
  }

  // Supondo que apenas um tipo de consulta seja selecionado, obtenha o valor
  $consulta_tipo = $_POST['consulta']; // Modifique se várias seleções forem permitidas

  mysqli_stmt_bind_param($stmt, "s", $consulta_tipo);

  $result = mysqli_stmt_execute($stmt);

  if (!$result) {
    echo "Erro: Não foi possível executar a instrução SQL.";
    exit;
  }

  mysqli_stmt_close($stmt);
  mysqli_close($mysqli);

  echo "Consulta marcada com sucesso!"; // Ou trate o sucesso de forma diferente
}

// Inclua o arquivo de conexão se necessário (presumindo que esteja no mesmo diretório)
// include_once('conexão.php'); // Ajuste o caminho se necessário
?>