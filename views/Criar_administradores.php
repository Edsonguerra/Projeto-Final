<?php
include('../modules/conexao.php'); 
include('../modules/protect.php');?>
<?php
if (isset($_POST['submit'])) {
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $administrador = $_POST['administrador'] = true;

        $sql = "INSERT INTO `user` (nome, administrador, email, senha) VALUES ('$nome', '$administrador','$email','$senha')";
        $result = mysqli_query($mysqli, $sql);

        if ($result) {
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
    <link rel="stylesheet" href="../public/assets/css/Criar_administrador.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="Administradores.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form method="POST">
                    <h5 class="titulo">Criar Administrador</h5>

                    <div class="input-box">
                        <input type="text" name="nome" class="input_nome" required placeholder="Digite o nome do administrador">
                        <label for="nome" class="nome_da_consulta">Nome do administrador</label>
                    </div>

                <div class="input-box">
                    <input type="text" name="email" class="input_area" required placeholder="Digite o seu email">
                    <label class="area_email">Email</label>
                </div>

                <div class="input-box">
                    <input type="text" name="senha" class="input_senha" required placeholder="Crie uma senha">
                    <label class="senha">Senha</label>
                </div>

                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Criar">
                </form>
            </div>
        </div>
    </div>
</body>
</html>