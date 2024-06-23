<?php
// include_once('conexao.php');
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_de_marcacao_de_consulta";

$mysqli = new mysqli($host, $user, $password, $bancodedados);
if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysql->error );
}

header('Content-Type:application/json');
// $idArea=$_GET["idArea"];
$idArea=1;
$data=[];
$sqli = "SELECT p.nome_completo, p.sexo, c.nome AS consulta_nome,estado,posicao,
 cp.data FROM paciente p JOIN consulta_paciente cp ON p.id_paciente = cp.paciente_id_paciente
  JOIN consulta c ON cp.consulta_id_da_consulta = c.id_da_consulta WHERE c.area_id={$idArea} ORDER BY posicao"; 

$result = mysqli_query($mysqli, $sqli);
while ($user_data = mysqli_fetch_assoc($result)){
    array_push($data,$user_data);
    }
    echo json_encode($data);
?>


