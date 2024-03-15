fetch('https://fakestoreapi.com/products?limit=15')
.then(res => rest.json())
.then ((json) => {
    console.log(json);
    const ul = document.getElementById('lista-consultas');
    json.forEach((lista)=> {
        const li = document.createElement("li");
        li.innerHTML = `
        <a href="#">
            <img width="40" 
                src="${lista.image}">
            <span class="Tipo-consulta">${lista.title}</span>
        </a>
        `;
        ul.appendChild(li);
    })
})