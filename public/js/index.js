const selectBtn = document.querySelector(".selecionar-botao"),
    itemsLista = document.querySelector(".lista");


selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
})

itemsLista.forEach (itemLista => {
    itemLista.addEventListener("click", () => {
      itemLista.classList.toggle("checked");
    });
});
