<?php
$host = "localhost";
$user = "root";
$password = "";
$bancodedados = "site_marcação_de_consulta";



$conexao = mysqli_connect($host, $user, $password, $bancodedados) or die("Erro ao conectar ao banco de dados!");


$tipos_de_consultas = $_POST['Consulta_de_Dermatologia']; 


switch ($tipos_de_consultas ) {
  case "1": 


    break;
  case "2": 
 

    break;
  case "3": 

    break;
  case "4":

    break;
  case "5": 

    break;
}


mysqli_close($conexao);


echo "<p>Consulta agendada com sucesso!</p>";




?>