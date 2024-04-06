<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "consultas";

include_once('conexao.php');

try {

  $conn = new mysqli($host, $user, $password, $bancodedados);


  if (isset($_POST['consulta'])) {
    $consulta = $_POST['consulta'];


    $consultas = array(
      "Consulta_de_Dermatologia",
      "Consulta_de_Pediatria",
      "Consulta_de_Hematologia",
      "Consulta_de_Ginecologia",
      "Consulta_de_Estomatologia"
    );

    if (in_array($consulta, $consultas)); {

    
      if (isset($_POST['pesquisar'])) {
        $stmt = $conn->prepare("SELECT * FROM consultas WHERE nome = ?");
        $stmt->bind_param("s", $consulta);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
          $row = $result->fetch_assoc();

          echo "Consulta selecionada: " . $row['nome'];
        } else {
          echo "Consulta não encontrada.";
        }

        $stmt->close();
      } else {
        echo "Ação inválida. Utilize o botão 'Pesquisar' para selecionar consultas.";
      }
      if (isset($_POST['consulta']) && !empty($_POST['consulta'])) {
        // Código para processar a consulta
      } else {
        echo "Consulta inválida";
      }

  } 

  if (isset($_POST['consulta']) && !empty($_POST['consulta'])) {
    // Código para processar a consulta
  } else {
    echo "Consulta inválida";
  }
  
  if (isset($_POST['primeiro-lista'])) {
    // Código para criar a consulta
  } else {
    echo "Nenhuma consulta selecionada.";
  }

    $sql = "INSERT INTO consultas (nome) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt = $conn->prepare("SELECT * FROM consultas WHERE nome = ?");

    if ($stmt) {
      $stmt->bind_param("s", $consulta);
      $stmt->execute();
    
      // ...
    
      $stmt->close();
    } else {
      echo "Erro ao preparar a consulta.";
    }
    
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
      echo "Consulta criada com sucesso!";
    } else {
      echo "Erro ao criar consulta.";
    }

    $stmt->close();
  } else {
    echo "Nenhuma consulta selecionada.";
  }
} catch (mysqli_sql_exception $e) {
  echo "Erro na consulta: " . $e->getMessage();
} finally {

  if ($conn) {
    $conn->close();
  }
}
?>