const cartItems = document.getElementById("cart-items");
const cartTotal = document.getElementById("cart-total");
const clearCartBtn = document.getElementById("clear-cart");

const cart = [];

    // Función para agregar un producto al carrito
    function addToCart(productName, productPrice, productImageURL) {
const existingItem = cart.find(item => item.name === productName);

if (existingItem) {
    existingItem.quantity++;
} else {
    cart.push({ name: productName, price: productPrice, quantity: 1, imageURL: productImageURL });
}

    displayCart(); // Llama a la función para mostrar el carrito después de agregar un elemento
    }

    // Función para eliminar un producto del carrito
    function removeFromCart(productName) {
        const index = cart.findIndex(item => item.name === productName);

        if (index !== -1) {
            cart.splice(index, 1);
        }

        displayCart();
    }

    // Función para mostrar el carrito
    function displayCart() {
        const cartItems = document.getElementById("cart-items");
        let totalPrice = 0;

        // Limpia el contenido actual del carrito
        cartItems.innerHTML = "";

        cart.forEach(item => {
            const subtotal = item.price * item.quantity;
            totalPrice += subtotal;

            const row = document.createElement("tr");
            row.innerHTML = `
                <td>
                    <img src="${item.imageURL}" alt="${item.name}" width="50">
                    ${item.name}
                </td>
                <td>$${item.price}</td>
                <td>${item.quantity}</td>
                <td>$${subtotal.toFixed(2)}</td>
                <td><button onclick="removeFromCart('${item.name}')">Eliminar</button></td>
            `;

            cartItems.appendChild(row);
        });

        // Actualiza el total del carrito
        const cartTotal = document.getElementById("cart-total");
        cartTotal.textContent = totalPrice.toFixed(2);
    }
//intercambios
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