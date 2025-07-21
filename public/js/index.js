const selectBtn = document.querySelector(".selecionar-botao",),
    items = document.querySelectorAll(".lista");


selectBtn.addEventListener("click", () => {
    selectBtn.classList.toggle("open");
});

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


