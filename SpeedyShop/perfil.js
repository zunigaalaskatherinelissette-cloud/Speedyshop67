
document.addEventListener("DOMContentLoaded", function () {
    const inputFoto = document.getElementById("foto_perfil");
    const imagenPerfil = document.querySelector(".profile-picture");

    inputFoto.addEventListener("change", function () {
        const archivo = inputFoto.files[0];

        if (archivo && archivo.type.startsWith("image/")) {
            const lector = new FileReader();

            lector.onload = function (e) {
                imagenPerfil.src = e.target.result;
            };

            lector.readAsDataURL(archivo);
        } else {
            alert("Por favor selecciona un archivo de imagen válido.");
        }
    });
});
