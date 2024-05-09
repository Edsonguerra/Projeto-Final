<?php

include('../modules/conexao.php');

if (isset($_GET['deleteid'])) {
    $id_user = intval($_GET['deleteid']); 

    $sql = "DELETE FROM `user` WHERE id_user = ?"; 

    $stmt = mysqli_prepare($mysqli, $sql); 

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_user); 
        if (mysqli_stmt_execute($stmt)) {
            header('location:../views/Administradores.php');
        } 
    } else {
        echo "Erro ao preparar a instrução: " . mysqli_error($mysqli);
    }
}

?>