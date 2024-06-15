<?php

include_once('conexao.php');

    if (isset($_POST['consulta'])) {
        $id_da_consulta = $_POST['consulta'];
        $idConsultas = $_POST['consulta'];
        $nomes_consultas = [];
        $consulta_options = ""; 
        // echo print_r($id_da_consulta);
        if (empty($id_da_consulta)) {
  
            $consulta_options .= "<option value='' selected disabled>Nenhuma consulta selecionada</option>";
        } else {
            foreach ($id_da_consulta as $id) {
                $query = "SELECT nome FROM consulta WHERE id_da_consulta = '$id'";
                $result = mysqli_query($mysqli, $query);
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $nomes_consultas[] = $row['nome'];
 
                    $consulta_options .= "<option value='$id' selected disabled>$row[nome]</option>";
                } else {
                    echo "Erro ao buscar o nome da consulta $id: " . mysqli_error($mysqli) . "<br>";
                }
            }
        }
    }
    $idCon=implode(",",$id_da_consulta);
    header("Location: ../modules/Formulário_de_consulta.php?consultasId={$idCon}");
    ?>
<!-- 
if (isset($_POST['submit'])) {
    $nome_completo = $_POST['nome_completo'];
    $sexo = $_POST['sexo'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $bilhete = $_POST['bilhete'];

    if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];

        $result = mysqli_query($mysqli, "INSERT INTO paciente (nome_completo, sexo, data_de_nascimento, user_id_user, bilhete) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento', '$id_user', '$bilhete')");
        $queryBi = "SELECT id_paciente FROM paciente WHERE bilhete = '$bilhete'";
        $resultPaciente = mysqli_query($mysqli, $queryBi);
        $pacienteId=mysqli_fetch_assoc($resultPaciente)['id_paciente'];

        if ($result) {
            $_SESSION['message'] = "com sucesso!";
        } else {
            $_SESSION['message'] = "Erro ao inserir paciente: " . mysqli_error($mysqli);
        }
    } else {
        $_SESSION['message'] = "Erro: usuário não está logado.";
    }
    print_r($_POST);
die("Mor...");
    header("Location: ../views/Consulta.php");
    exit();
}
} -->
