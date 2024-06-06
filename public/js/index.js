const selectBtn = document.querySelector(".selecionar-botao"),
    items = document.querySelectorAll(".lista");

selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

items.forEach(item => {
    item.addEventListener("click", () => {
        item.classList.toggle("checked");
        
        const checkbox = item.querySelector(".consulta-checkbox");
        checkbox.checked = !checkbox.checked;

        let checkedItems = document.querySelectorAll(".lista input[type='checkbox']:checked"),
            btnText = document.querySelector(".texto");

        if (checkedItems.length > 0) {
            console.log("Selecionado");
        } else {
            console.log("Não selecionado");
        }
    });
});

