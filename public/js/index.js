const selectBtn = document.querySelector(".selecionar-botao",),
    items = document.querySelectorAll(".lista");


selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");

        let checked = document.querySelectorAll(".checked"),
            btnText = document.querySelector(".texto");

            if(checked && checked.length > 10){
              console.log("Selecionado")
            }else{
              console.log("Não selecionado")
            }
    });
})