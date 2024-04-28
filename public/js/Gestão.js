const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');


allDropdown.forEach(item=> {
    const a = item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', function (e) {
        e.preventDefault();

        item.classList.toggle('show');

    })
})