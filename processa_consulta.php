<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_marcação_de_consulta";


if(isset($_POST['consulta'])){
    print_r('Consulta: ' . $_POST['Consulta_de_Dermatologia']);
    print_r('<br>');
    print_r('Consulta: ' . $_POST['Consulta_de_Pediatria']);
    print_r('<br>');
    print_r('Consulta: ' . $_POST['Consulta_de_Hematologia']);
    print_r('<br>');
    print_r('Consulta: ' . $_POST['Consulta_de_Ginecologia']);
    print_r('<br>');
    print_r('Consulta: ' . $_POST['Consulta_de_Estomatologia']);
}

    include_once('conexão.php');

    $nome = $_POST['nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($mysqli, "INSERT INTO tipos_de_consultas(Consulta_de_Dermatologia,Consulta_de_Pediatria,Consulta_de_Hematologia,Consulta_de_Ginecologia,Consulta_de_Estomatologia) VALUES ('$Consulta_de_Dermatologia' , '$Consulta_de_Pediatria' , '$Consulta_de_Hematologia' , '$Consulta_de_Ginecologia' , '$Consulta_de_Estomatologia')"); 

   

?>