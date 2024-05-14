<?php
include_once('conexao.php');
    if(isset($_POST['submit']))
    {

        $nome_completo = $_POST['nome_completo'];
        $sexo = $_POST['sexo'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        $historico_medico = $_POST['historico_medico'];

        $result =   mysqli_query($mysqli, "INSERT INTO paciente (nome_completo,sexo,data_de_nascimento,historico_medico) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento', '$historico_medico')");
    }
    header("Location: ../views/Consulta.php");
?>