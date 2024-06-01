<?php
include_once('conexao.php');
    if(isset($_POST['submit']))
    {

        $nome_completo = $_POST['nome_completo'];
        $sexo = $_POST['sexo'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        // echo $_SESSION;
        // die();
        // $user_id=$_SESSION['id_user'];

        $result =   mysqli_query($mysqli, "INSERT INTO paciente (nome_completo,sexo,data_de_nascimento) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento')");
        header("Location: ../views/Consulta.php");
    }
  
?>