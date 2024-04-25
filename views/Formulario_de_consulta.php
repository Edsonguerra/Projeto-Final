<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/css/Formulariio_de_consulta.css">
    <title>Document</title>
</head>
<body>
    <div class="Formulario">
        <div class="detalhes">
            <div class="img-formulario"></div>
            <div class="submite-formulario">
                <form action="">
                    <h5 class="titulo">Formulário de Consulta</h5>
                    <div class="input-box">
                        <input type="text" class="input_nome" required>
                        <label class="nome_completo" for="">Nome completo</label>
                    </div>
                    
                    <br>
                    <div class="Genero">
                        <br><br>
                    <p class="Sexo">Sexo:</p>
                        <input type="radio" id="feminino" name="genero" value="Feminino" required>
                        <label for="feminino">Feminino</label>
                    </div>
    
                    <div class="Genero">
                        <input type="radio" id="Masculino"name="genero" value="Masculino" required>
                        <label for="masculino">Masculino</label>
                    </div>

                    <div class="input-box">
                        <label class="data_nascimento" for="data_nascimento">Data de nascimento:</label> 
                        <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                    </div>
                    

                    <div class="input-box">  
                        <label class="historico" for="#">Historico medico</label>                    
                        <textarea name="" class="input" required id="Historico" cols="30" rows="10" placeholder="Fale um pouco..."></textarea> 
                    </div>
                    <input type="submit" class="btn_enviar" value="Envia"> 
                </form>
            </div>
        </div>
    </div>
</body>
</html>