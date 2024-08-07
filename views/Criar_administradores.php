<?php
include('../modules/conexao.php'); 
include('../modules/protect.php');

if (isset($_POST['submit'])) {
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $lastName=$_POST['lastName']?? '';
//    $administrador = $_POST['administrador'] = true;
   $administrador = $_POST ['nivel'];

        $sqlFuncionario = "INSERT INTO `funcionario` (`id_funcionario`, `nome`, `ultimo_nome`, `email`, `senha`, `administrador`) VALUES (NULL, '$nome', '$lastName', '$email', '$senha', '$administrador')";
        $resultFuncionario = mysqli_query($mysqli, $sqlFuncionario);
        if ($resultFuncionario) {
         echo "Dados inseridos com sucesso!";
        } else {
         echo "Erro ao inserir dados: " . mysqli_error($mysqli);
         }
    header("Location: ../views/Administradores.php");  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Criar_administradorrr.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="Formulario Background">
            </div>
            <div class="submite-formulario">
                <a href="Administradores.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form method="POST" action="../views/Criar_administradores.php">
                    <h5 class="titulo">Criar Funcionários</h5>

                    <div class="input-box">
                        <input type="text" id="nome" name="nome" class="input_nome" required placeholder="Digite o nome do funcionário">
                        <label for="nome" class="nome_da_consulta">Nome </label>
                    </div>

                <div class="input-box">
                    <input type="text" id="email" name="email" class="input_area" required placeholder="Digite o seu email">
                    <label for="email" class="area_email">Email</label>
                </div>

                <div class="input-box">
                    <input type="password" id="senha" name="senha" class="input_senha" required placeholder="Crie uma senha">
                    <label for="senha" class="senha">Senha</label>
                </div>

                <div class="input-box">
                    <select name="nivel" id="nivel" class="input_funcionario" required>
                        <option value="" selected disabled >Selecione o nível</option>
                        <option value="1">Administrador</option>
                        <option value="0">Funcionario</option>
                        <?php echo $funcionario_options; ?>
                    </select>
                        <label id="nivel" class="funcionario">Nível</label>
                    </div>


                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Criar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>