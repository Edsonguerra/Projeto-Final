const selectBtn = document.querySelector(".selecionar-botao");
    items = document.querySelectorAll(".lista");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

// items.forEach(item => {
//     item.addEventListener("click", () => {
//         item.classList.toggle("checked");
//         const checkbox = item.querySelector(".consulta-checkbox");
//         console.log(checkbox);
//         checkbox.checked = !checkbox.checked;

//         if(localStorage.getItem("consultasObjectos")){
//             const consultasObject=JSON.parse(localStorage.getItem("consultasObjectos"));
//             if(consultasObject[checkbox.name]){
//                 delete consultasObject[checkbox.name];
//             }else{
//                 consultasObject[checkbox.name]=checkbox.value;
//             }
//             localStorage.setItem("consultasObjectos",JSON.stringify(consultasObject));              
//         }else{
//             const obj={};
//             obj[checkbox.name]=checkbox.value;
//             localStorage.setItem("consultasObjectos",JSON.stringify(obj));  
//         }

//         let checkedItems = document.querySelectorAll(".lista input[type='checkbox']:checked"),
//             btnText = document.querySelector(".texto");
//         if (checkedItems.length > 0) {
//             console.log("Selecionado");
//         } else {
//             console.log("Não selecionado");
//         } 
//     });
// });

