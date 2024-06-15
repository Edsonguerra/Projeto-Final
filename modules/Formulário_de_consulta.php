<?php

include_once('conexao.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$consultas=explode(",",$_GET['consultasId']);

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    
if (isset($_POST['submit'])) {
    $nome_completo = $_POST['nome_completo'];
    $sexo = $_POST['sexo'];
    $data_de_nascimento = $_POST['data_de_nascimento'];
    $bilhete = $_POST['bilhete'];

    if (isset($_SESSION['id_user'])) {
        $id_user = $_SESSION['id_user'];

        $result = mysqli_query($mysqli, "INSERT INTO paciente (nome_completo, sexo, data_de_nascimento, user_id_user, bilhete) VALUES ('$nome_completo', '$sexo', '$data_de_nascimento', '$id_user', '$bilhete')");
        $queryBi = "SELECT id_paciente FROM paciente WHERE bilhete = '$bilhete'";
        $resultPaciente = mysqli_query($mysqli, $queryBi);
        $pacienteId=mysqli_fetch_assoc($resultPaciente)['id_paciente'];
        $idPaciente=$pacienteId;

        echo print_r($id_da_consulta);
        for($i=0;$i<$consultas.length;$i++){
echo $consultas[$i];
        }
        die("depois do ciclo");
        
        if ($result) {
            $_SESSION['message'] = "com sucesso!";
        } else {
            $_SESSION['message'] = "Erro ao inserir paciente: " . mysqli_error($mysqli);
        }
    } else {
        $_SESSION['message'] = "Erro: usuário não está logado.";
    }
    
    header("Location: ../views/Consulta.php");
    exit();
}

// }


?>

<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Formularios_de_Consultasss.css">
    <title>Document</title>
</head>
<body>

    <div class="consultas-container">
        <select name="id" class="input">
            <?php echo $consulta_options; ?>
        </select>
        <label class="titulo_consulta">Consulta/as selecionada/as</label>
    </div>



    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="../views/painel.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form action="../modules/formController.php" method="POST">
                    <h5 class="titulo">Formulário de Consulta</h5>
                    <div class="input-box">
                        <input type="text" name="nome_completo" id="nome_completo" class="input_nome" required placeholder="Digite o seu nome completo">
                        <label for="nome completo" class="nome_completo">Nome completo</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="bilhete" id="bilhete" class="input-bilhete" maxlength="14" placeholder="Digite o seu numero do bilhete" required  >
                        <label for="bilhete" class="bilhete">Bilhete</label>
                    </div>
                    
                    <br>
                    <div class="Genero">
                        <br><br>
                    <p class="Sexo">Sexo:</p>
                        <input type="radio" id="feminino" name="sexo" value="Feminino" required>
                        <label for="feminino">Feminino</label>
                    </div>
    
                    <div class="Genero">
                        <input type="radio" id="Masculino"name="sexo" value="Masculino" required>
                        <label for="masculino">Masculino</label>
                    </div>

                    <div class="input-box">
                        <label class="data_nascimento" for="data_nascimento">Data de nascimento:</label> 
                        <input type="date" name="data_de_nascimento" id="data_nascimento" class="inputUser" required>
                    </div>

                    
                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Envia"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>