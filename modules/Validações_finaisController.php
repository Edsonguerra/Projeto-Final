<?php
include_once('conexao.php');
if(session_status() === PHP_SESSION_NONE){ session_start();}

$anularConsultaId=$_GET['consulta_id'];
$consulta_id_ausente=$_GET['consulta_id_ausente'];
$consulta_id_atendida=$_GET['consulta_id_atendida'];

if ($_POST['submit']){
    $area=htmlspecialchars($_POST["areaId"] ?? 1);
    $consultaId=htmlspecialchars($_POST["consultaId"] ?? '');
    $estado=htmlspecialchars($_POST["estado"]?? '');
    $dataHora=htmlspecialchars($_POST["data"] ?? '');
    $doctorId=htmlspecialchars($_POST["doctorId"] ?? '');
    

    $query="UPDATE `consulta_paciente` SET `estado` = '$estado', `data` = '$dataHora' WHERE `consulta_paciente`.`id` = $consultaId";
      $resultConsultaPaciente = mysqli_query($mysqli, $query);

    $resultPacienteHasDoctor = mysqli_query($mysqli, "INSERT INTO consulta_paciente_has_doctor (consulta_paciente_id, doctor_id_doctor) VALUES ($consultaId, $doctorId)");
  
          
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

if($consulta_id_ausente){
  $estadoA="Ausente"; 
  $queryAnular="UPDATE `consulta_paciente` SET `estado` = '$estadoA', `data` = NULL, `posicao` = NULL WHERE `consulta_paciente`.`id` = $consulta_id_ausente";
  $resultAusenteQuery = mysqli_query($mysqli, $queryAnular);
       header("Location: ../views/Atender_consultas.php");
}

if($consulta_id_atendida){
  $estadoA="Atendida"; 
  $queryAtendida="UPDATE `consulta_paciente` SET `estado` = '$estadoA', `posicao` = NULL WHERE `consulta_paciente`.`id` = $consulta_id_atendida";
  $resultAusenteQuery = mysqli_query($mysqli, $queryAtendida);
       header("Location: ../views/Atender_consultas.php");
}
?>
