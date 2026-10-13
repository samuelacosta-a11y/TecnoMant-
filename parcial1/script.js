const botonConfirmar = document.querySelector("#btn-confirmar");

function mostrarMensaje() {
    const mensaje = document.querySelector("#mensaje");

mensaje.textContent = "Encargo recibido - te atiende Samuel Acosta Peralta";
mensaje.classList.remove("oculto");
}
botonConfirmar.addEventListener("click", mostrarMensaje);