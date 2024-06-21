<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/validações_finaiiiis.css">
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
                <form>
                    <h5 class="titulo">Validações Finais</h5>
                    <div class="input-box">
                        <input type="text" name="nome_completo" id="nome_completo" class="input_nome">
                        <label for="nome_completo" class="nome_completo">Nome completo do Paciente</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="bilhete" id="bilhete" class="input-bilhete">
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
                        <label class="data_nascimento" for="data_nascimento">Data e hora da consulta:</label> 
                        <input type="date" name="data" id="date" class="inputUser" required>
                    </div>

                    <div class="input-box">
                        <input type="text" name="estado" id="nestado" class="input_estado" placeholder="Digite o estado da consulta" required>
                        <label for="estado" class="estado">Estado da consulta</label>
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