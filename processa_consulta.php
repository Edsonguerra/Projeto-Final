<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultas";

include_once('conexao.php');


  $conn = new mysqli($host, $user, $password, $bancodedados);

  // Verifica se uma consulta foi selecionada
  if (isset($_POST['consulta']) && !empty($_POST['consulta'])) {
  $consultaSelecionada = $_POST['consulta'];

  // Simula o processamento da seleção (substitua pela sua lógica real)
  echo "Consulta selecionada: " . $consultaSelecionada;
  echo "<br>Você pode prosseguir para marcar a consulta.";

  // Você pode potencialmente redirecionar para outra página para detalhes da marcação
  // echo "<br><a href='agendar_consulta.php'>Marcar Consulta</a>";
} else {
  echo "Nenhuma consulta selecionada.";
}


?>