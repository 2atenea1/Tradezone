// Obtener elementos relevantes
const categorySelect = document.getElementById("category-select");
const products = document.querySelectorAll(".card-product");

// Agregar un evento para detectar cambios en la selección de categoría
categorySelect.addEventListener("change", function () {
    const selectedCategory = categorySelect.value;

    // Mostrar u ocultar productos según la categoría seleccionada
    products.forEach((product) => {
        if (selectedCategory === "todos" || product.classList.contains(selectedCategory)) {
            product.style.display = "grid";
        } else {
            product.style.display = "none";
        }
    });
});