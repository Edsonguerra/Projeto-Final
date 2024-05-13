<?php

include('conexao.php');

if (isset($_GET['deleteid'])) {
    $id_da_analise = $_GET['deleteid'];

    $sql = "DELETE FROM `analise` WHERE id_da_analise = $id_da_analise";

    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo "Consulta eliminada com sucesso!";
        header("Location: ../views/Gerenciamento_de_analises.php");
    } else {
        echo "Erro ao eliminar consulta: " . mysqli_error($mysqli);
    }
}

?>