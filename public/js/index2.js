const selectBtn = document.querySelector(".selecionar-botao");
    items = document.querySelectorAll(".lista");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});