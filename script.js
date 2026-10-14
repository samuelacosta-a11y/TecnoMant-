const botonTema = document.querySelector("#btn-tema");
botonTema.addEventListener("click", function () {
    document.body.classList.toggle("oscuro");

});
const botonMenu = document.querySelector("#btn-menu");
const menu = document.querySelector("nav ul");

botonMenu.addEventListener("click", function () {

    menu.classList.toggle("abierto");

});

const formulario = document.querySelector("#form-contacto");
const aviso = document.querySelector("#aviso-contacto");

function revisar(evento) {
    evento.preventDefault();
}
const nombre = document.querySelector("#nombre").value;
const correo = document.querySelector("#correo").value;
const mensaje = document.querySelector("#mensaje").value;