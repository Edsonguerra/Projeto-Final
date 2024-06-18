<?php
include_once('conexao.php');
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
    $queryBi = "SELECT id_paciente FROM paciente WHERE bilhete = '$bilhete'";
    $resultPaciente = mysqli_query($mysqli, $queryBi);
    $pacienteId=mysqli_fetch_assoc($resultPaciente)['id_paciente'];
   

    for ($i=0; $i<count($consultasID); $i++){ 
        $query = "INSERT INTO consulta_paciente (consulta_id_da_consulta,paciente_id_paciente) VALUES ('$consultasID[$i]','$pacienteId')";
        $resultConsultaPaciente = mysqli_query($mysqli, $query); 	
    }

    if ($result) {
            $_SESSION['message'] = "com sucesso!";
        } else {
            $_SESSION['message'] = "Erro ao Cadastrar consulta do paciente: " . mysqli_error($mysqli);
        }
    // } else {
    //     $_SESSION['message'] = "Erro: usuário não está logado.";
    // }
    
    header("Location: ../views/Consulta.php");
    exit();
}
// }
?>


