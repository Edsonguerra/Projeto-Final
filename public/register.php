<?php

// Conexão ao banco de dados
$host = "localhost";
$user = "root";
$password = "";
$bancodedados = "site_marcação_de_consulta";

$mysqli = new mysqli($host, $user, $password, $bancodedados);

// Validação de dados
if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $ultimo_nome = $_POST['ultimo_nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Validação de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Erro: Email inválido.</p>";
        exit;
    }

    // Validação de senha
    if (!validarSenha($senha)) {
        echo "<p>Erro: Senha fraca. A senha deve ter no mínimo 8 caracteres, com letras maiúsculas e minúsculas, números ou símbolos especiais.</p>";
        exit;
    }

    // Hash da senha
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    // Prepared statement para evitar SQL injection
    $stmt = $mysqli->prepare("INSERT INTO usuarios(nome, ultimo_nome, email, senha) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nome, $ultimo_nome, $email, $senhaHash);

    // Execução da query
    $stmt->execute();

    // Mensagem de sucesso
    echo "<p>Usuário cadastrado com sucesso!</p>";

    // Redirecionamento para a página inicial
    header("Location: index.html");
}

// Função para validar a senha
function validarSenha($senha) {
    // Requisitos da senha
    $tamanhoMinimo = 8;
    $regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$/";

    // Verificação dos requisitos
    return strlen($senha) >= $tamanhoMinimo && preg_match($regex, $senha);
}

?>