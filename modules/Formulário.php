<?php
include_once('conexao.php');

session_start();

if (isset($_POST['submit'])) {

    $nome_completo = $_POST['nome_completo'];
    $sexo = $_POST['sexo'];
    $data_de_nascimento = $_POST['data_de_nascimento'];

    if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];

        $result = mysqli_query($mysqli, "INSERT INTO paciente (nome_completo, sexo, data_de_nascimento, user_id_user) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento', '$id_user')");

        if ($result) {
            $_SESSION['message'] = "com sucesso!";
        } else {
            $_SESSION['message'] = "Erro ao inserir paciente: " . mysqli_error($mysqli);
        }
    } else {
        $_SESSION['message'] = "Erro: usuário não está logado.";
    }
    header("Location: ../views/Consulta.php");
    exit();
}
?>