<?php
// Conectar ao banco de dados (substitua pelas credenciais do seu banco)
$conn = mysqli_connect("localhost", "seu_usuario", "sua_senha", "seu_banco");

// Consulta SQL para buscar consultas
$sql = "SELECT id, nome FROM consultas";
$result = mysqli_query($conn, $sql);

// Verificar se a consulta foi bem-sucedida
if (mysqli_num_rows($result) > 0) {
  echo "<div class='Selecionar'>";
  echo "  <div class='selecionar-botao'>";
  echo "    <span class='texto'>Selecionar Consulta</span>";
  echo "    <span class='down-arrow'>";
  echo "      <i class='fa-solid fa-chevron-down'></i>";
  echo "    </span>";
  echo "  </div>";
  echo "  <ul class='lista-consulta'>";
  while ($row = mysqli_fetch_assoc($result)) {
    $consultaId = $row["id"];
    $consultaNome = $row["nome"];
    echo "    <li class='lista'>";
    echo "      <img class='img' width='35' src='public/assets/css/img/43493.png' alt=''>";
    echo "      <span class='checked'>";
    echo "        <i class='fa-solid fa-check check-icon'></i>";
    echo "      </span>";
    echo "      <span class='primeiro-lista'>" . $consultaNome . "</span>"; // Insere o nome da consulta dinamicamente
    echo "    </li>";
  }
  echo "  </ul>";
  echo "</div>";
} else {
  echo "Erro ao buscar consultas do banco de dados.";
}

mysqli_close($conn);
?>