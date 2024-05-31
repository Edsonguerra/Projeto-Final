<?php

include('conexao.php');

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "DELETE FROM `area` WHERE id = $id";

    $result = mysqli_query($mysqli, $sql);
    if ($result) {
        echo "Area eliminada com sucesso!";
        header("Location: ../views/Area.php");
    } else {
        echo "Erro ao eliminar area: " . mysqli_error($mysqli);
    }
}

?>