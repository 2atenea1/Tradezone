<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trade-Zone</title>
    <link rel="stylesheet" href="/home/comienzo.css">
    <link rel="stylesheet" href="/ventas/registrodeventas.css">
    <link rel="stylesheet" href="/intercambios/intercambios.css">
    <link rel="stylesheet" href="/pqrs/pqrs.css">
    <link rel="stylesheet" href="/home/catalogo.css">
    <link rel="icon" href="img/icon/sincronizar.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
   
</head>

<body>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset" style="color: #0d0d0d;"></i>
                    <div class="content-customer-support">
                        <span class="text">Soporte al cliente</span>
                    </div>
                </div>

                <div class="container-logo">
                    <i class="fa-solid fa-rotate fa-spin" style="color: #000000;"></i>
                    <h1 class="logo"><a href="/inicio">TRADE ZONE</a></h1>
                </div>

                <div class="container-user">
                    <a href="/iniciarsesion"><i class="fa-solid fa-user"></i></a>
                    <div class="dropdown-1">
                        <div class="content-shopping-cart">
                            <i class="fa-solid fa-cart-shopping" style="color: var(--primary-color);"
                                onclick="showProductDetails('Xiaomi Redmi Note 12s')"></i>
                            <div class="dropdown-contenido">
                                <section class="shopping-cart">
                                    <h1>Carrito de Compras</h1>
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Precio</th>
                                                <th>Cantidad</th>
                                                <th>Subtotal</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                    </table>
                                    <div class="cart-total">
                                        <p>Total: $<span id="cart-total">0.00</span></p>
                                        <button id="clear-cart">Vaciar Carrito</button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="/inicio">Inicio</a></li>
                    <li><a href="/catalogo">Categoría</a></li>
                    <li><a href="/intercambioss">Intercambios</a></li>
                    <li><a href="/registrosventas">Historial</a></li>
                    <li><a href="/pqrss">Ayuda</a></li>
                </ul>
                <form class="search-form">
                    <input type="search" placeholder="Buscar..." />
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>
        </div>
    </header>

    @yield('contenido')
    <footer class="footer">
        <div class="container container-footer">
            <div class="menu-footer">
                <div class="contact-info">
                    <p class="title-footer">Información de Contacto</p>
                    <ul>
                        <li>EmaiL: tradezone@support.com</li>
                    </ul>
                    <div class="social-icons">
                        <span class="facebook">
                            <i class="fa-brands fa-facebook-f"></i>
                        </span>
                        <span class="twitter">
                            <i class="fa-brands fa-twitter"></i>
                        </span>
                        <span class="youtube">
                            <i class="fa-brands fa-youtube"></i>
                        </span>
                        <span class="pinterest">
                            <i class="fa-brands fa-pinterest-p"></i>
                        </span>
                        <span class="instagram">
                            <i class="fa-brands fa-instagram"></i>
                        </span>
                    </div>
                </div>

                <div class="information">
                    <p class="title-footer">Información</p>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Información Delivery</a></li>
                        <li><a href="#">Politicas de Privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                    </ul>
                </div>

                <div class="my-account">
                    <p class="title-footer">Mi cuenta</p>

                    <ul>
                        <li><a href="#">Mi cuenta</a></li>
                        <li><a href="#">Historial de ordenes</a></li>
                        <li><a href="#">Historial de Intercambios</a></li>
                    </ul>
                </div>

                <div class="newsletter">
                    <p class="title-footer">SUGERENCIAS</p>

                    <div class="content">
                        <p>
                            Si presentas algun problema con la pagina te suguerimos que ingreses al apartado dee
                            ayuda.
                        </p>
                    </div>
                </div>
            </div>

            <div class="copyright">
                <p>
                    TRADE-ZONE &copy; 2023
                </p>

                <img src="img/icon/payment.png" alt="Pagos">
            </div>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/81581fb069.js" crossorigin="anonymous"></script>
    <script src="home/home.js"></script>
    <script src="intercambios/intercam.js"></script>
    <script src="home/catalogo.js"></script>
</body>

</html>
