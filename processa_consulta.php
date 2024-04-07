<?php
$host = "localhost";
$user = "root";
$password = "";
$bancodedados = "site_marcação_de_consulta";


// Conectar ao banco de dados
$conexao = mysqli_connect($host, $user, $password, $bancodedados) or die("Erro ao conectar ao banco de dados!");

// Extrair o tipo de consulta selecionado
$tipoConsulta = $_POST['Consulta_']; // Substitua "_" pelo nome específico da consulta (ex: Consulta_Dermatologia)

// Tratar a consulta de acordo com o tipo selecionado
switch ($tipoConsulta) {
  case "1": // Consulta de Dermatologia
    // Código específico para agendar consulta de dermatologia
    // ...
    break;
  case "2": // Consulta de Pediatria
    // Código específico para agendar consulta de pediatria
    // ...
    break;
  case "3": // Consulta de Hematologia
    // Código específico para agendar consulta de hematologia
    // ...
    break;
  case "4": // Consulta de Ginecologia
    // Código específico para agendar consulta de ginecologia
    // ...
    break;
  case "5": // Consulta de Estomatologia
    // Código específico para agendar consulta de estomatologia
    // ...
    break;
}

// Fechar a conexão com o banco de dados
mysqli_close($conexao);

// Exibir mensagem de sucesso para o usuário
echo "<p>Consulta agendada com sucesso!</p>";

// Redirecionar o usuário para uma página de confirmação


?>