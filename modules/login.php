<?php include('conexao.php');?>
<?php
if (isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0 || strlen($_POST['senha']) == 0 ) {
        header("Location: ../views/login.php");
    } else {

        if ($mysqli && $mysqli->connect_errno === 0) {
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);
        } else {
            echo "Falha ao conectar ao MySQL";
            exit();
        }

        $sql_code = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'LIMIT 1";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade !== 0) {
            $usuarios = $sql_query->fetch_assoc(); 

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_user'] = $usuarios['id_user'];
            $_SESSION['nome'] = $usuarios['nome'];
            $_SESSION['email'] = $usuarios['email'];
            header("Location: ../views/painel.php");

        } else {
            header("Location: ../views/login.php");
        }
    }   
}
?>