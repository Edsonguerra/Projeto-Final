<?php
if (isset($_POST['nome']) || isset($_POST['ultimo_nome']) || isset($_POST['email']) || isset($_POST['senha'])) {
    if (strlen($_POST['nome']) == 0) {
        echo "Digite o seu nome";
    } else if (strlen($_POST['ultimo_nome']) == 0) {
        echo "Digite seu ultimo nome";
    } else if (strlen($_POST['email']) == 0) {
        echo "Digite o seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Digite a sua palavra-passe";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $ultimonome = $mysqli->real_escape_string($_POST['ultimo_nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM usuarios WHERE nome = '$nome' AND ultimo_nome = '$ultimo_nome' AND email = '$email' AND senha = '$senha'";
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

        } else {
            echo "Falha ao entrar! E-mail ou Senha incorretos";
        }
    }     
}

?>