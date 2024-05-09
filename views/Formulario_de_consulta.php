<?php include('../modules/conexao.php');?>
<?php include('../modules/protect.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Formulario_de_consulta.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario">
                <img src="../public/assets/css/img/imagem do formulario.jpg" alt="">
            </div>
            <div class="submite-formulario">
                <a href="painel.php">
                    <button class="voltar">Voltar</button>
                </a>
                <form action="../modules/Formulário.php" method="POST">
                    <h5 class="titulo">Formulário de Consulta</h5>
                    <div class="input-box">
                        <input type="text" name="nome_completo" id="nome_completo" class="input_nome" required placeholder="Digite o seu nome completo">
                        <label for="nome completo" class="nome_completo">Nome completo</label>
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
                    

                    <div class="input-box">  
                        <label for="#" class="historico">Historico medico</label>                    
                        <textarea name="historico_medico" class="input" id="historico_medico" cols="30" rows="10" placeholder="Fale um pouco..."></textarea> 
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Envia"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>