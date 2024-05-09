<?php
include('conexao.php');

// Check if the id_da_consulta parameter is set
if (isset($_GET['id_da_consulta'])) {
  $id_da_consulta = $_GET['id_da_consulta'];

  // Construct the DELETE query
  $sql = "DELETE FROM `consulta` WHERE id_da_consulta = $id_da_consulta";

  // Execute the query
  if ($mysqli->query($sql) === TRUE) {
    echo "Consulta excluída com sucesso!"; // Or a success message
  } else {
    echo "Erro ao excluir consulta: " . $mysqli->error; // Or an error message
  }

  // Redirect back to Gerenciamento_de_consultas.php (optional)
  header('location: Gerenciamento_de_consultas.php');
  exit;
}

// If no id is provided, handle it appropriately (e.g., display an error message)