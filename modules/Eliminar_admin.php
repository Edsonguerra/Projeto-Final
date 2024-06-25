<?php

include('../modules/conexao.php');
$id_funcionario = $_GET['deleteid']; 

if (isset($id_funcionario)){

    $sql = "DELETE FROM `funcionario` WHERE id_funcionario = ?"; 

    $stmt = mysqli_prepare($mysqli, $sql); 

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id_funcionario); 
        if (mysqli_stmt_execute($stmt)) {
            header('location:../views/Administradores.php');
        } 
    } else {
        echo "Erro ao preparar a instrução: " . mysqli_error($mysqli);
        die("morri");
    }
}

?>