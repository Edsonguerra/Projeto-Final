const allDropdown = document.querySelectorAll('#sidebar .side-dropdown');

allDropdown.forEach(item=> {
    const a = item.parentElement.querySelector('a:first-child');
    a.addEventListener('click', function (e) {
        e.preventDefault();

        item.classList.toggle('show');

    })
})

const toggleSidebar = document.querySelector('nav .toggle-sidebar');
const sidebar = document.getElementById('sidebar');

toggleSidebar.addEventListener('click', function () {
    sidebar.classList.toggle('hider');

    if(sidebar.classList.contains('hider')) {
        
    }
})