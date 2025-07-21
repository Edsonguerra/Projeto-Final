const selectBtn = document.querySelector(".selecionar-botao");
    items = document.querySelectorAll(".lista");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

<<<<<<< HEAD
items.forEach(item => {
    item.addEventListener("click", () => {
      const button=item.querySelector('.consultaInput');

      if(!button.checked){
        item.classList.add("checked");
        button.checked=true;
        // let checked = document.querySelectorAll(".checked"),
            // btnText = document.querySelector(".texto");
            // if(checked && checked.length > 10){
            //   console.log("Selecionado");
            //   console.log(button);
            // }else{
            //   console.log("Não selecionado")
            // }
            console.log(button);  
      }else{
        button.checked=false;
        item.classList.remove("checked");
      }
    });
})
=======
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
>>>>>>> c2ac6bf9289d19f29ce9d49bd8ac7f0e612b6485

//         let checkedItems = document.querySelectorAll(".lista input[type='checkbox']:checked"),
//             btnText = document.querySelector(".texto");
//         if (checkedItems.length > 0) {
//             console.log("Selecionado");
//         } else {
//             console.log("Não selecionado");
//         } 
//     });
// });

