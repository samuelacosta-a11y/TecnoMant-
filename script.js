const botonTema = document.querySelector("#btn-tema");
botonTema.addEventListener("click", function () {
    document.body.classList.toggle("oscuro");

});
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

botonMenu.addEventListener("click", function () {

    menu.classList.toggle("abierto");

});