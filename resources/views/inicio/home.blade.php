@extends('plantilla.plantilla')

@section('contenido')
<main class="main-content">

    <section class="banner">
        <div class="content-banner">
            <p>Conoce como intercambiar</p>
            <h2>El intercambio es la base principal de nuestra vida económica. Sin intercambio,no existiría economía
                verdadera y, prácticamente, tampoco habría sociedad.</h2><br /><h3>(Murray Rothbard)</h3>
            <a href="#">Más información</a>
        </div>
    </section>

    <main class="main-content">
        <section class="container container-features">
            <div class="card-feature">
                <i class="fa-solid fa-user-shield"></i>
                <div class="feature-content">
                    <span>Seguridad</span>
                    <p>Protejemos tu privacidad</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-regular fa-credit-card"></i>
                <div class="feature-content">
                    <span>Pagos </span>
                    <p>Realiza tus pagos de manera segura</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-bolt-lightning"></i>
                <div class="feature-content">
                    <span>Ofertas</span>
                    <p>Encontraras las mejores ofertas</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-circle-question"></i>
                <div class="feature-content">
                    <span>Servicio de Ayuda</span>
                    <p>Mandanos tu peticion o reclamo</p>
                </div>
            </div>
        </section>
        <main class="main-content">

            <section class="container top-categories">
                <h1 class="heading-1">Mejores Categorías</h1>
                <div class="container-categories">
                    <div class="card-category category-vehiculos">
                        <img src="" alt="">
                        <p>Vehiculos</p>
                        <span>Ver más</span>
                    </div>
                    <div class="card-category category-tecnologia">
                        <p>Tecnologia</p>
                        <span>Ver más</span>
                    </div>
                    <div class="card-category category-juegos">
                        <p>Juegos</p>
                        <span>Ver más</span>
                    </div>
                </div>
            </section> 
            
            <section class="container top-products">
                <h1 class="heading-1">Mejores Productos</h1>

                <div class="container-options">
                    <span class="active">Destacados</span>
                    <span>Más recientes</span>
                    <span>Mejores Vendidos</span>
                </div>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product" id="producto1">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_622320-MLU69622392646_052023-O.webp"
                                alt="Xiaomi Redmi Note 12s" />
                            <span class="discount">-27%</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Xiaomi Redmi Note 12s</h3>
                            <span class="add-cart" onclick="addToCart('Xiaomi Redmi Note 12s', 1699.96, 'https://http2.mlstatic.com/D_NQ_NP_622320-MLU69622392646_052023-O.webp')">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>                            
                            
                            <p class="price">$1.699.960 <span>$2.499.960</span></p>
                            
                            
                        </div>
                    </div>
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_864432-MLA54954927923_042023-O.webp"
                                alt="Xiaomi Redmi Note 12 Dual" />
                            <span class="discount">-21%</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Xiaomi Redmi Note 12 Dual</h3>
                            <span class="add-cart" onclick="addToCart('Xiaomi Redmi Note 12 Dual', 589.900)">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <p class="price">$589.900 <span>$749.930</span></p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_958613-MCO71650110582_092023-O.webp"
                                alt="Celular Barato Ipro Aa20" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Celular Barato Ipro Aa20</h3>
                            <span class="add-cart" onclick="addToCart('Nombre del Producto', Precio, 'URL de la Imagen')">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            
                            
                            <p class="price">$290.920</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_699538-MCO69510888045_052023-O.webp"
                                alt="Silla Ergonomica" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Silla Ergonomica</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <p class="price">$125.960</p>

                        </div>
                    </div>

                    
                </div>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product" id="producto1">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_622320-MLU69622392646_052023-O.webp"
                                alt="Xiaomi Redmi Note 12s" />
                            <span class="discount">-27%</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Xiaomi Redmi Note 12s</h3>
                            <span class="add-cart" onclick="addToCart('Xiaomi Redmi Note 12s', 1699.96, 'https://http2.mlstatic.com/D_NQ_NP_622320-MLU69622392646_052023-O.webp')">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>                            
                            
                            <p class="price">$1.699.960 <span>$2.499.960</span></p>
                            
                            
                        </div>
                    </div>
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_864432-MLA54954927923_042023-O.webp"
                                alt="Xiaomi Redmi Note 12 Dual" />
                            <span class="discount">-21%</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Xiaomi Redmi Note 12 Dual</h3>
                            <span class="add-cart" onclick="addToCart('Xiaomi Redmi Note 12 Dual', 589.900)">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <p class="price">$589.900 <span>$749.930</span></p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_958613-MCO71650110582_092023-O.webp"
                                alt="Celular Barato Ipro Aa20" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Celular Barato Ipro Aa20</h3>
                            <span class="add-cart" onclick="addToCart('Nombre del Producto', Precio, 'URL de la Imagen')">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            
                            
                            <p class="price">$290.920</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_699538-MCO69510888045_052023-O.webp"
                                alt="Silla Ergonomica" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Silla Ergonomica</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <p class="price">$125.960</p>

                        </div>
                    </div>

                    
                </div>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product" id="producto1">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_622320-MLU69622392646_052023-O.webp"
                                alt="Xiaomi Redmi Note 12s" />
                            <span class="discount">-27%</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Xiaomi Redmi Note 12s</h3>
                            <span class="add-cart" onclick="addToCart('Xiaomi Redmi Note 12s', 1699.96, 'https://http2.mlstatic.com/D_NQ_NP_622320-MLU69622392646_052023-O.webp')">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>                            
                            
                            <p class="price">$1.699.960 <span>$2.499.960</span></p>
                            
                            
                        </div>
                    </div>
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_864432-MLA54954927923_042023-O.webp"
                                alt="Xiaomi Redmi Note 12 Dual" />
                            <span class="discount">-21%</span>
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Xiaomi Redmi Note 12 Dual</h3>
                            <span class="add-cart" onclick="addToCart('Xiaomi Redmi Note 12 Dual', 589.900)">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <p class="price">$589.900 <span>$749.930</span></p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_958613-MCO71650110582_092023-O.webp"
                                alt="Celular Barato Ipro Aa20" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Celular Barato Ipro Aa20</h3>
                            <span class="add-cart" onclick="addToCart('Nombre del Producto', Precio, 'URL de la Imagen')">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            
                            
                            <p class="price">$290.920</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_699538-MCO69510888045_052023-O.webp"
                                alt="Silla Ergonomica" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Silla Ergonomica</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </span>
                            <p class="price">$125.960</p>

                        </div>
                    </div>

                    
                </div>
            </section>
            <section class="container specials">
                <h1 class="heading-1">Intercambios</h1>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_934474-MCO45789674306_052021-O.webp"
                                alt="Buso Hentai" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Buso Anime</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>

                    
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_917565-MCO53212230606_012023-O.webp"
                                alt="Buso Negro" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Buso Negro</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Nuevo</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_700939-MCO69139192406_042023-O.webp"
                                alt="Pantalones" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Pantalon</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_900024-MCO42462072155_072020-O.webp"
                                alt="Camiseta" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Camiseta Polo</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>
                </div>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_934474-MCO45789674306_052021-O.webp"
                                alt="Buso Hentai" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Buso Anime</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>

                    
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_917565-MCO53212230606_012023-O.webp"
                                alt="Buso Negro" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Buso Negro</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Nuevo</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_700939-MCO69139192406_042023-O.webp"
                                alt="Pantalones" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Pantalon</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_900024-MCO42462072155_072020-O.webp"
                                alt="Camiseta" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Camiseta Polo</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>
                </div>

                <div class="container-products">
                    <!-- Producto 1 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="	https://http2.mlstatic.com/D_NQ_NP_934474-MCO45789674306_052021-O.webp"
                                alt="Buso Hentai" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Buso Anime</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>

                    
                    <!-- Producto 2 -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_917565-MCO53212230606_012023-O.webp"
                                alt="Buso Negro" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Buso Negro</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Nuevo</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_700939-MCO69139192406_042023-O.webp"
                                alt="Pantalones" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                            <h3>Pantalon</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>
                    <!--  -->
                    <div class="card-product">
                        <div class="container-img">
                            <img src="https://http2.mlstatic.com/D_NQ_NP_900024-MCO42462072155_072020-O.webp"
                                alt="Camiseta" />
                            <div class="button-group">
                                <span>
                                    <i class="fa-regular fa-eye"></i>
                                </span>
                                <span>
                                    <i class="fa-regular fa-heart"></i>
                                </span>
                                <span>
                                    <i class="fa-solid fa-code-compare"></i>
                                </span>
                            </div>
                        </div>
                        <div class="content-card-product">
                            <div class="stars">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>
                            <h3>Camiseta Polo</h3>
                            <span class="add-cart">
                                <i class="fa-solid fa-rotate fa-spin"></i>
                            </span>
                            <p class="price">Usado</p>

                        </div>
                    </div>
                </div>
            </section>
            <div class="info-back">
                <section class="info container">
                    <div class="info-img">
                        <img src="/img/icon/icono.png" alt="">
                    </div>


                    <div class="info-txt">
                        <h2>¿Quienes Somos?</h2>
                        <p>
                            Somos TRADE-ZONE y buscamos desarrollar un espacio en el que los usuarios puedan encontrar
                            lo que necesitan y ofrecer lo que tienen
                            de una manera fácil, económica y sostenible, y al mismo tiempo crear una comunidad sana de
                            usuarios. Con el fin de
                            crear un entorno seguro y confiable, ademas de que encuentren fácilmente a otros
                            participantes interesados en intercambiar productos o artículos específicos.
                        </p>
                        <a href="#" class="btn-2">Mas Información</a>
                    </div>
                </section>
            </div>
            <br>
            <br>

@endsection
