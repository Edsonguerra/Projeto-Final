<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "site_marcação_de_consulta";

// Conexão com o banco de dados
$conexao = mysqli_connect($host, $user, $password, $database);

// Verifica se a conexão foi bem sucedida
if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se foram selecionadas consultas
    if(isset($_POST["tipo_consulta"])) {
        // Exibe uma mensagem indicando que as consultas foram marcadas com sucesso
        echo "Consultas marcadas com sucesso:";
        foreach($_POST["tipo_consulta"] as $consulta) {
            echo "<br>- $consulta";
        }
    } else {
        // Caso nenhuma consulta tenha sido selecionada
        echo "Por favor, selecione pelo menos uma consulta.";
    }
} else {
    // Caso o formulário não tenha sido submetido
    echo "Este script PHP é destinado apenas para processamento de formulário.";
}

?>