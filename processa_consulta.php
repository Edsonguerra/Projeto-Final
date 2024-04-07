<?php
$host = "localhost";
$user = "root";
$password = "";
$bancodedados = "site_marcação_de_consulta";



$conexao = mysqli_connect($host, $user, $password, $bancodedados) or die("Erro ao conectar ao banco de dados!");

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se foram selecionadas consultas
    if(isset($_POST["tipo_consulta"])) {
        // Loop através das consultas selecionadas
        foreach($_POST["tipo_consulta"] as $consulta) {
            // Aqui você pode fazer o que quiser com cada consulta selecionada,
            // por exemplo, você pode apenas imprimir na tela
            echo "Consulta selecionada: " . $consulta . "<br>";
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