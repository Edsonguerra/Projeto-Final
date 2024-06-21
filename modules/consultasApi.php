<?php
include_once('conexao.php');
header('Content-Type:application/json');
$idArea=$_GET["idArea"];
$data=[];
$sqli = "SELECT * FROM consulta WHERE area_id={$idArea}"; 

$result = mysqli_query($mysqli, $sqli);
while ($user_data = mysqli_fetch_assoc($result)){
    array_push($data,$user_data);
    }
    echo json_encode($data);
?>


