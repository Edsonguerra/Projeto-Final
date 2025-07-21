const form=document.querySelector("#formConsulta");
const allInputCheckAll=document.querySelectorAll(".lista input");

// console.log(allInputCheckAll[0]);

allInputCheckAll.forEach((inputCheck)=>{
    inputCheck.addEventListener("change",(el)=>{
        console.log("Checado.....");
    });
});

// action="../modules/Formulário_de_consulta.php" method="POST"

form.addEventListener("submit",(el)=>{
el.preventDefault();
console.log("Submiting...");
})