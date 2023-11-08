const dropArea = document.getElementById("drop-area");
const inputFile = document.getElementById("input-file");
const imageView = document.getElementById("img-view");

// Escuchar cambios en el campo de entrada de archivos
inputFile.addEventListener("change", uploadImage);

// Función para cargar la imagen
function uploadImage() {
    if (inputFile.files.length > 0) {
        const imglink = URL.createObjectURL(inputFile.files[0]);
        imageView.style.backgroundImage = `url(${imglink})`;
        imageView.textContent = "";
        imageView.style.border = 0;
    }
}

dropArea.addEventListener("dragover", function (e) {
    e.preventDefault();
});

dropArea.addEventListener("drop", function (e) {
    e.preventDefault();
    inputFile.files = e.dataTransfer.files;
    uploadImage();
});


function mostrarOpciones() {
    var tipoSeleccionado = document.getElementById("tipo").value;
    var opcionesVender = document.getElementById("opcionesVender");

    if (tipoSeleccionado === "vender") {
        opcionesVender.style.display = "block";
    } else {
        opcionesVender.style.display = "none";
    }
}