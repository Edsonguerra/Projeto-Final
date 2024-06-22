<?php
include_once('conexao.php');
if(session_status() === PHP_SESSION_NONE){ session_start();}

$anularConsultaId=$_GET['consulta_id'];

if ($_POST['submit']){
    $area=htmlspecialchars($_POST["areaId"] ?? 1);
    $consultaId=htmlspecialchars($_POST["consultaId"] ?? '');
    $estado=htmlspecialchars($_POST["estado"]?? '');
    $dataHora=htmlspecialchars($_POST["data"] ?? '');
   
    $query="UPDATE `consulta_paciente` SET `estado` = '$estado', `data` = '$dataHora' WHERE `consulta_paciente`.`id` = $consultaId";
      $resultConsultaPaciente = mysqli_query($mysqli, $query);
          
     if ($resultConsultaPaciente ) {
           $_SESSION['message'] = "Atualizado com sucesso!";
       } else {
           $_SESSION['message'] = "Erro ao Atualizar a Consulta: " . mysqli_error($mysqli);
       }
         header("Location: ../views/Consulta_validação.php?areaId={$area}");

        }

if($anularConsultaId){
    
    $estadoA="Anulada"; 
    $areaToReturn=$_GET['area'];
    $queryAnular="UPDATE `consulta_paciente` SET `estado` = '$estadoA', `data` = NULL WHERE `consulta_paciente`.`id` = $anularConsultaId";
    $resultAnulacao = mysqli_query($mysqli, $queryAnular);
         header("Location: ../views/Consulta_validação.php?areaId={$areaToReturn}");
}
?>