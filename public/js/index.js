let loginBtn = document.getElementById("loginBtn");
let registerBtn = document.getElementById("registerBtn");
let loginContainer = document.getElementById("login");
let registerContainer = document.getElementById("register");

function myMenufunction() {
    let navMenu = document.getElementById("navMenu");

    if (navMenu.className === "nav-menu") {
        navMenu.className += " responsive";
    } else {
        navMenu.className = "nav-menu";
    }
}

function login() {
    loginContainer.style.left = "4px";
    registerContainer.style.right = "-520px";
    loginBtn.className += " white-btn";
    registerBtn.className = "btn";
    loginContainer.style.opacity = 1;
    registerContainer.style.opacity = 0;
    color: //#endregion
}

function register() {
    loginContainer.style.left = "-510px";
    registerContainer.style.right = "5px";
    loginBtn.className = "btn";
    registerBtn.className += " white-btn";
    loginContainer.style.opacity = 0;
    registerContainer.style.opacity = 1;
}
