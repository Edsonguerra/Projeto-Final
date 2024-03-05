const selectBtn = document.querySelector(".selecionar-botao"),
    items = document.querySelector(".lista");


selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
})