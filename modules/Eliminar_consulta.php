<?php

include('conexao.php');

if (isset($_GET['deleteid'])) {
    $id_da_consulta = $_GET['deleteid'];

    $sql = "DELETE FROM `consulta` WHERE id_da_consulta = $id_da_consulta";

    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo "Consulta eliminada com sucesso!";
        header("Location: ../views/Gerenciamento_de_consultas.php");
    } else {
        echo "Erro ao eliminar consulta: " . mysqli_error($mysqli);
    }
}

?>