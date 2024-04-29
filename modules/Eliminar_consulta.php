<?php include('../modules/conexao.php');?>

<?php
    if(isset($_GET['eliminarid'])){
        $id=$_GET['eliminarid'];

        $sql="delete from `tipos_de_consultas` where id=$id";
        $result=mysqli_query($mysqli, $sql);
        if($result){
           header('location:../views/Gerenciamento_de_consultas.php');
        }else{
            die(mysqli_error($mysqli));
        }
    }

?>