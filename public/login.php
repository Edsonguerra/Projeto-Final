<?php
$host="localhost";
$user="root";
$password="";
$bancodedados ="site_marcação_de_consulta";

$mysqli = new mysqli($host, $user, $password, $bancodedados);

if ($mysqli->connect_errno) {
    echo "Falha ao conectar ao MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Digite o seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Digite a sua palavra-passe";
    } else {

        if ($mysqli && $mysqli->connect_errno === 0) {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
        } else {
            echo "Falha ao conectar ao MySQL";
            exit();
        }

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuarios = $sql_query->fetch_assoc(); 

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuarios['id'];
            $_SESSION['nome'] = $usuarios['nome'];

            header("Location: painel.php");

            $email = null;
            $email_erro = null;
            $senha = null;
            $senha_erro2 = null;
            $sucesso = null;



        } if(isset($_POST['entrar'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if(empty(trim($email))){
                 $email_erro = "Digite o Email";
            }else{

            }if(empty(trim($senha))){
                 $senha_erro2 = "Digite a sua senha";
            }else{
                 $sucesso = "Obrigado";
            }
        }
    }   

}

?>