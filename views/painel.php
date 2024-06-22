<?php include('../modules/protect.php');?> 
<?php include('../modules/conexao.php');?>
<?php include('../components/header.php');?>
<body class="panelContainer bg-image-1" id="body"> 
    <div class="overlay"></div>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <i class="fa-solid fa-hospital"></i>
                <span>Hospital Cajueiros</span>
            </div>
            <i class="fa-solid fa-bars" id="btn"></i>
        </div>
        <ul>
            <li>
                <a href="Consulta.php">
                    <i class="fa-solid fa-clipboard-question"></i>
                    <span class="nav-item">Consultar</span>
                </a>
            </li>
            <li>
                <a href="">
                    <i class="fa-solid fa-handshake-angle"></i>
                    <span class="nav-item">Ajuda</span>
                </a>
            </li>
            <li>
                <a href="Gestão.php">
                    <i class="fa-solid fa-users"></i>
                    <span class="nav-item">Gestão</span>
                </a>
            </li> 
            <li>
                <a href="logout.php" class="sair">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span class="nav-item">Sair</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="container">
            <h2> Não perca <br> tempo!</h2>
            <h3>Marque agora mesmo a tua consulta!</h3>
            <h4>Bem vindo/a</h4>
            <a href="#selecionarConsulta" id="marcaConsultaBtn" class="marcar" style="padding:6px; text-decoration:none;">Marcar Consulta</a>
        </div> 

        <div class="cabeça">
            <label class="contacto">Contacto</label>
            <label class="ajuda">Ajuda</label>
            <a href="#selecionarConsulta" id="marcaConsultaBtn" class="marca_consulta" style="padding:6px; text-decoration:none;">Marcar Consulta</a>
        </div>

        <?php
            $consulta = mysqli_query($mysqli, "SELECT * FROM consulta"); 
        ?>
<div style="margin-top:80px; display: flex; justify-content:center;gap:20px;">
    <div class="areaContainer">
    <select  name="hospitalArea" id="hospitalArea">
        <option value="area">Selecionar Área</option>
    <?php $areas= mysqli_query($mysqli, "SELECT * FROM area"); ?>
      <?php if($areas):?>
        <?php while($area_data = mysqli_fetch_assoc($areas)):?>
            <option name=<?=$area_data['nome']?> value=<?=$area_data['id']?>> <?=$area_data['nome']?> </option>
            <?php endwhile; ?>            
        <?php endif;?>
    </select>
    </div>

<form action="../modules/Formulário_de_consulta.php" method="POST" onsubmit="return validarFormulario()">
<div class="Selecionar" id="selecionarConsulta">
                <div class="selecionar-botao">
                    <span class="texto">Selecionar Consulta</span>
                    <span class="down-arrow">
                        <i class="fa-solid fa-chevron-down"></i>
                    </span> 
                </div>
                    <ul class="lista-consulta" id="lista-consultas">
                    <li class="lista">
                            <span class="primeiro-lista">Nenhuma Área selecionada</span>
                        </li>
                    </ul>        
            </div>    
        </form>
        </div>
        <script>
            function validarFormulario(){
                if(document.querySelectorAll(".consulta-checkbox")){
                    var checkboxes = document.querySelectorAll(".consulta-checkbox");

var peloMenosUmSelecionado = false;

for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
        peloMenosUmSelecionado = true;
        break;
    }
}

if (!peloMenosUmSelecionado) {
    alert("Por favor, selecione pelo menos uma consulta.");
    return false;
}

return true;
}

document.getElementById('marcaConsultaBtn').addEventListener('click', function() {
document.getElementById('selecionarConsulta').scrollIntoView({ behavior: 'smooth' });
});
                }
              
        </script>

        <div class="contudo-abaixo">
            <h4 class="Hosp">Hospital dos Cajueiros</h4>
            <img src="../public/assets/css/img/fundo2.jpg" width="103.3%">
            <h5 class="Infor">Informações</h5>
            <a class="Sobre" href="Sobre.php">Sobre</a>
            <a class="Contacto" href="Contacto.php">Contacto</a>
            <a class="Termos" href="Termos de uso.php">Termos</a>
            <a class="Politica" href="Politica.php">Política de privacidade</a>
        </div>
    </div>
    <script>
        let btn = document.querySelector('#btn');
        let sidebar = document.querySelector('.sidebar');
        let hospitalArea=document.querySelector("#hospitalArea");

        function liFunction(element){
        element.classList.toggle("checked");
        const checkbox =element.querySelector(".consulta-checkbox");
        checkbox.checked = !checkbox.checked;

        if(localStorage.getItem("consultasObjectos")){
            const consultasObject=JSON.parse(localStorage.getItem("consultasObjectos"));
            if(consultasObject[checkbox.name]){
                delete consultasObject[checkbox.name];
            }else{
                consultasObject[checkbox.name]=checkbox.value;
            }
            localStorage.setItem("consultasObjectos",JSON.stringify(consultasObject));              
        }else{
            const obj={};
            obj[checkbox.name]=checkbox.value;
            localStorage.setItem("consultasObjectos",JSON.stringify(obj));  
        }

        let checkedItems = document.querySelectorAll(".lista input[type='checkbox']:checked"),
            btnText = document.querySelector(".texto");
        if (checkedItems.length > 0) {
            console.log("Selecionado");
        } else {
            console.log("Não selecionado");
        } 
    };

        btn.onclick = function () {
            sidebar.classList.toggle('active');
        };

        hospitalArea.addEventListener("change",async (el)=>{
            if(localStorage.getItem("consultasObjectos")){
                localStorage.clear("consultasObjectos");
            }

            if(el.target.value!=="area"){
                localStorage.setItem("areaId",el.target.value);
                const result= await fetch(`http://localhost/Projeto-Final/modules/consultasApi.php/?idArea=${el.target.value}`);
                const data = await result.json();     
                const dados_da_consulta=document.querySelector("#lista-consultas");
                dados_da_consulta.innerHTML='';

                data.forEach(element =>{
                    dados_da_consulta.innerHTML+=`
                   <li class="lista" style="z-index:200;" onclick="liFunction(this)" >
                            <img class="img" width="35" src="../public/assets/css/img/43493.png" alt="">
                            <span class="checked"><i class="fa-solid fa-check check-icon"></i></span>
                            <span class="primeiro-lista">${element.nome}</span>
                            <input type="checkbox" name=${element.nome}  value=${element.id_da_consulta} class="consulta-checkbox">
                        </li>
                `});
                dados_da_consulta.innerHTML+=`<button class="button" type="submit">Marcar Consulta</button>`;
            }else{
                localStorage.clear("areaId");
                const dados_da_consulta=document.querySelector("#lista-consultas");
                dados_da_consulta.innerHTML=`
                   <li class="lista">
                            <span class="primeiro-lista">Nenhuma Área selecionada</span>
                        </li>
                `
            }
        });
    </script>
    <script src="../public/js/index.js"></script> 

</body>
</html>
