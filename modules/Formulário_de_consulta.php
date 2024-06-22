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
        <select name="id" class="input" id="consultasSelecionadas">

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
                        <label for="nome_completo" class="nome_completo">Nome completo</label>
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
                        <input type="radio" id="Masculino" name="sexo" value="Masculino" required>
                        <label for="Masculino">Masculino</label>
                    </div>

                    <div class="input-box">
                        <label class="data_nascimento" for="data_nascimento">Data de nascimento:</label> 
                        <input type="date" name="data_de_nascimento" id="data_nascimento" class="inputUser" required>
                    </div>
                    <input type="hidden" name="consultasId" id="consultasId">           
                    <input type="submit" name="submit" id="submit" class="btn_enviar" value="Envia"> 
                </form>
            </div>
        </div>
    </div>
    <script>
        const consultasSelecionadas=document.querySelector("#consultasSelecionadas");
        const consultas=JSON.parse(localStorage.getItem("consultasObjectos"));
        const consultasID=[];
        for (const key in consultas) {
            consultasSelecionadas.innerHTML+=`<option value=${consultas[key]} selected disabled>${key}</option>`;
        consultasID.push(consultas[key]);
        }
        document.querySelector("#consultasId").value=consultasID;
      localStorage.clear("consultasObjectos");
    </script>
</body>
</html>