<?php
include('../modules/conexao.php');

if (isset($_GET['deleteid'])) {
    $id_doctor = $_GET['deleteid'];

    $sql = "DELETE FROM `doctor` WHERE id_doctor = ?";

    $stmt = mysqli_prepare($mysqli, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_doctor);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ../views/Doctores.php");
            exit();
        } else {
            echo "Erro ao executar a exclusão: " . mysqli_error($mysqli);
        }
    } else {
        echo "Erro ao preparar a instrução: " . mysqli_error($mysqli);
    }
}
?>
