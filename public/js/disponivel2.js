const selectBtn2 = document.querySelector(".selecionar-botao2",),
    items2 = document.querySelectorAll(".lista2");


selectBtn2.addEventListener("click", () => {
    selectBtn2.classList.toggle("open2");
});

items2.forEach(item2 => {
    item2.addEventListener("click", () => {
        item2.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".texto");

            if(checked && checked.length > 10){
              console.log("Selecionado")
            }else{
              console.log("Não selecionado")
            }
    });
    
})

