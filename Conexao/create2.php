<?php
//conexao
            
require_once 'conexao.php';

if(isset($_POST['btn-registrar'])){
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect,$_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    $mysqli = new mysqli("localhost","user","password","database");
    $stmt = $msqli ->prepare ("INSERT INTO tabela(nome,email,idade) VALUES(?,?,?)");
    $stmt->bind_param("sss",$nome ,$email,$idade);
    $stmt->execute();
    $stmt->close();
    
    header("Location:registrationForm.php");

}

?>
    
    
