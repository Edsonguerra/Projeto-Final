<?php
include_once('conexao.php');

//  function testt(){
    // $AAreas= mysqli_query($mysqli, "SELECT * FROM area");
    // $resulta=mysqli_query($mysqli,"SELECT * FROM consulta");
    // $areaId=mysqli_fetch_assoc($result)['area_id'];
    //  echo print_r($AAreas);
    // return $areaId;
//  };
//  testt();
// die("ddd");


if(session_status() === PHP_SESSION_NONE){ session_start();}
if ($_POST['submit']){
    $nome_completo = $_POST['nome_completo'];
    $sexo = $_POST['sexo'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $bilhete = $_POST['bilhete'];
    $id_user = $_SESSION['id_user'];
    $consultas=$_POST["consultasId"];
    $consultasID=explode(',',$consultas);

    $result = mysqli_query($mysqli, "INSERT INTO paciente (nome_completo, sexo, data_de_nascimento, user_id_user, bilhete) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento', '$id_user', '$bilhete')");
    $queryBi = "SELECT id_paciente FROM paciente ORDER BY id_paciente DESC LIMIT 1";
    $resultPaciente = mysqli_query($mysqli, $queryBi);
    $pacienteId=mysqli_fetch_assoc($resultPaciente)['id_paciente'];

    for ($i=0; $i<count($consultasID); $i++){

        $resultConsulta=mysqli_query($mysqli,"SELECT * FROM consulta WHERE id_da_consulta={$consultasID[$i]}");
        $areaId=mysqli_fetch_assoc($resultConsulta)['area_id'];


        $sqli = "SELECT posicao FROM paciente p JOIN consulta_paciente cp ON p.id_paciente = cp.paciente_id_paciente
        JOIN consulta c ON cp.consulta_id_da_consulta = c.id_da_consulta WHERE c.area_id={$areaId} ORDER BY id DESC LIMIT 1"; 

        $result = mysqli_query($mysqli, $sqli);
        if($result->num_rows>0){
            $lastPosition = mysqli_fetch_assoc($result)['posicao'] + 1;
            $query = "INSERT INTO consulta_paciente (consulta_id_da_consulta,paciente_id_paciente,posicao) VALUES ('$consultasID[$i]','$pacienteId',$lastPosition)";
            $resultConsultaPaciente = mysqli_query($mysqli, $query); 	
        }else{
            $query = "INSERT INTO consulta_paciente (consulta_id_da_consulta,paciente_id_paciente,posicao) VALUES ('$consultasID[$i]','$pacienteId',1)";
            $resultConsultaPaciente = mysqli_query($mysqli, $query);
        }
        // echo $lastPosition;
        // die();
       
    }
    if ($result) {
            $_SESSION['message'] = "com sucesso!";
        } else {
            $_SESSION['message'] = "Erro ao Cadastrar consulta do paciente: " . mysqli_error($mysqli);
        }
    
    header("Location: ../views/Consulta.php");
    exit();
}
?>


