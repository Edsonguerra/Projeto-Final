<?php

include('../modules/conexao.php');

if (isset($_GET['deleteid'])) {
    $id_user = intval($_GET['deleteid']); // Converter para inteiro por segurança

    $sql = "DELETE FROM `user` WHERE id_user = ?"; // Use o marcador de instrução preparada

    $stmt = mysqli_prepare($mysqli, $sql); // Prepara a instrução

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_user); // Vincular o parâmetro
        if (mysqli_stmt_execute($stmt)) {
            header('location:../views/Administradores.php');
        } 
    } else {
        echo "Erro ao preparar a instrução: " . mysqli_error($mysqli);
    }
}

?>