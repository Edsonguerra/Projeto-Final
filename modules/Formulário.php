<?php
include_once('conexao.php');
    if(isset($_POST['submit']))
    {

        $nome_completo = $_POST['nome_completo'];
        $sexo = $_POST['sexo'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        $historico_medico = $_POST['historico_medico'];
        // echo $_SESSION;
        // die();
        // $user_id=$_SESSION['id_user'];

        $result =   mysqli_query($mysqli, "INSERT INTO paciente (nome_completo,sexo,data_de_nascimento,historico_medico,user_id_user) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento', '$historico_medico',4)");
    }
  
?>