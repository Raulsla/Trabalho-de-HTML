const menu = document.querySelector('.menu');
const NavMenu = document.querySelector('.nav-menu');

menu.addEventListener('click', () => {
    menu.classList.toggle('ativo');
    NavMenu.classList.toggle('ativo');
})

document.getElementById("cadastro").addEventListener("click", function () {
    // Redirecionar para a página 2
    window.location.href = "cadastro.html";
});




