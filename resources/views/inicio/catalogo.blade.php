@extends('plantilla.plantilla')

@section('contenido')
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
    <br>
    <div class="Filtro">
        <div class="category-filter">
            <h1>CATEGORIAS</h1>
            <label for="category-select">Selecciona una categoría:</label>
            <br>
            <select id="category-select">
                <option value="todos">Todos los productos</option>
                <option value="categoria-vehiculos">Vehiculos</option>
                <option value="categoria-tecnologia">Tecnologia</option>
                <option value="categoria-juegos">Juegos y Juguetes</option>
                <option value="categoria-hogar">Hogar y Muebles</option>
                <option value="categoria-moda">Moda</option>
                <option value="categoria-deportes">Deportes</option>
                <option value="categoria-cuidado">Cuidado Personal</option>
                <option value="categoria-accesorios">Accesorios</option>
                <option value="categoria-herramientas">Herramientas</option>
                <option value="categoria-electrodomesticos">Electrodomesticos</option>
                <option value="categoria-libros">Libros, Revistas y Comics</option>
            </select>
        </div>  
    </div>
    <br>
    <br>
    <main class="main-content">      
        <section class="container top-products">
            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product categoria-tecnologia" id="producto1">
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
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>                            
                        
                        <p class="price">$1.699.960 <span>$2.499.960</span></p>
                        
                        
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product categoria-tecnologia">
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
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$589.900 <span>$749.930</span></p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
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
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$290.920</p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_687432-MLA52223845204_102022-O.webp"
                            alt="Apple iPad Air (5ª generación)" />
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
                        <h3>Apple iPad Air (5ª gen)</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$2.680.000</p>

                    </div>
                </div>
                <div class="card-product categoria-tecnologia" id="producto1">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_656548-MLA46114829749_052021-O.webp"
                            alt="Iphone 11 (128GB)" />
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
                        <h3>Iphone 11 (128GB)</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>                            
                        
                        <p class="price">$1.999.990</p>
                        
                        
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_967743-MCO54980438314_042023-O.webp"
                            alt="Xiaomi Poco F3 5g" />
                        <span class="discount">-40%</span>
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
                        <h3>Xiaomi Poco F3 5g</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$2.189.900 <span>$3.649.990</span></p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <span class="discount">-45%</span>
                        <img src="	https://http2.mlstatic.com/D_NQ_NP_821834-MLA69940528771_062023-O.webp"
                            alt="Celular Tecno Spark 10 Pro" />
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
                        <h3>Celular Tecno Spark 10 Pro</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$549.990 <span>$999.990</span></p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_938998-MLA71496726949_092023-O.webp"
                            alt="Apple iPad (9ª generación)" />
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
                        <h3>Apple iPad (9ª gen)</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$1.500.560</p>

                    </div>
                </div>
                <div class="card-product categoria-tecnologia" id="producto1">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_966657-MCO71521590851_092023-O.webp"
                            alt="Torre Cpu Gamer Athlon" />
                        <span class="discount">-12%</span>
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
                        <h3>Torre Cpu Gamer Athlon</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>                            
                        
                        <p class="price">$1.188.000 <span>$1.350.900</span></p>
                        
                        
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_833723-MCO50655936612_072022-O.webp"
                            alt="PC Gamers Paradise Gp1x " />
                        <span class="discount">-15%</span>
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
                        <h3>PC Gamers Paradise Gp1x </h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$8.074.910 <span>$9.499.990</span></p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="	https://http2.mlstatic.com/D_NQ_NP_640685-MCO70433255790_072023-O.webp"
                            alt="Torre Cpu Gamer Ryzen 5" />
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
                        <h3>Torre Cpu Gamer Ryzen 5</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$2.490.900</p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="data:image/jpeg;base64,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"
                            alt="Apple Macbook Air 13'' Chip M1" />
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
                        <h3>Apple Macbook Air 13'' Chip M1</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$4.585.000</p>

                    </div>
                </div>
                <div class="card-product categoria-tecnologia" id="producto1">
                    <div class="container-img">
                        <img src="	https://http2.mlstatic.com/D_NQ_NP_700827-MLA54938679888_042023-O.webp"
                            alt="Control joystick Sony PlayStation" />
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
                        <h3>Control joystick Sony PlayStation</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>                            
                        
                        <p class="price">$39.990 </p>
                        
                        
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_601870-MLA45260595246_032021-O.webp"
                            alt="Audífonos gamer Kotion G2000" />
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
                        <h3>Audífonos gamer Kotion G2000</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$87.900</p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="	https://http2.mlstatic.com/D_NQ_NP_641295-MLA69573719686_052023-O.webp"
                            alt="Xbox Series S 512GB" />
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
                        <h3>Xbox Series S 512GB</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$1.390.000</p>

                    </div>
                </div>
                <!--  -->
                <div class="card-product categoria-tecnologia">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_951973-MLA70217884926_062023-O.webp"
                            alt="Sony PlayStation 5" />
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
                        <h3>Sony PlayStation 5 825GB </h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$2.225.960</p>

                    </div>
                </div>

                <div class="card-product categoria-vehiculos">
                    <div class="container-img">
                        <img height="200px" src="https://http2.mlstatic.com/D_NQ_NP_715488-MCO71845966760_092023-W.webp"
                            alt="Chevrolet Sonic 1.6" />
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
                        <h3>Chevrolet Sonic 1.6 </h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$30.000.000</p>

                    </div>
                </div>

                <div class="card-product categoria-vehiculos">
                    <div class="container-img">
                        <img height="200px" src="https://http2.mlstatic.com/D_NQ_NP_839462-MCO71829342962_092023-W.webp"
                            alt="Chevrolet Colorado 2.8" />
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
                        <h3>Chevrolet Colorado 2.8</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$205.500.000</p>

                    </div>
                </div>


                <div class="card-product categoria-vehiculos">
                    <div class="container-img">
                        <img height="200px" src="https://http2.mlstatic.com/D_NQ_NP_850720-MCO71823350558_092023-W.webp"
                            alt="Chevrolet  Cobalt 1.8" />
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
                        <h3>Chevrolet  Cobalt 1.8</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$35.000.000</p>

                    </div>
                </div>

                <div class="card-product categoria-vehiculos">
                    <div class="container-img">
                        <img height="200px" src="https://http2.mlstatic.com/D_NQ_NP_802962-MCO71834251399_092023-W.webp"
                            alt="Chevrolet  Tracker 1.8" />
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
                        <h3>Chevrolet  Tracker 1.8</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$42.900.000</p>

                    </div>
                </div>

                <div class="card-product categoria-juegos">
                    <div class="container-img">
                        <img height="250px" src="https://http2.mlstatic.com/D_NQ_NP_853075-MCO51202217221_082022-O.webp"
                            alt="Masas Y Plastilinas Play-doh" />
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
                        <h3>Masas Y Plastilinas Play-doh</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$90.920</p>

                    </div>
                </div>

                <div class="card-product categoria-juegos">
                    <div class="container-img">
                        <img height="250px" src="https://http2.mlstatic.com/D_NQ_NP_958808-MCO43345755113_092020-O.webp"
                            alt="Cuatrimoto Moto Electrica" />
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
                        <h3>Cuatrimoto Moto Electrica</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$1.560.000</p>

                    </div>
                </div>

                <div class="card-product categoria-juegos">
                    <div class="container-img">
                        <img height="250px" src="https://http2.mlstatic.com/D_NQ_NP_844284-MCO51202224898_082022-O.webp"
                            alt="Lanzador Nerf Elite 2.0" />
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
                        <h3>Lanzador Nerf Elite 2.0</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$143.900</p>

                    </div>
                </div>

                <div class="card-product categoria-juegos">
                    <div class="container-img">
                        <img height="250px" src="https://http2.mlstatic.com/D_NQ_NP_711760-MCO51202210982_082022-O.webp"
                            alt="Lanzador Nerf 2.0" />
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
                        <h3>Lanzador Nerf 2.0</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$99.900</p>

                    </div>
                </div>

                <div class="card-product categoria-hogar">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_Q_NP_901494-MCO53229032031_012023-P.webp"
                            alt="Closet Armario Doble" />
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
                        <h3>Closet Armario Doble</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$109.000</p>

                    </div>
                </div>

                <div class="card-product categoria-hogar">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_Q_NP_968239-MLA49706417428_042022-P.webp"
                            alt="Silla de escritorio" />
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
                        <h3>Silla de escritorio</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$384.900</p>

                    </div>
                </div>

                <div class="card-product categoria-hogar">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_Q_NP_617468-MLA50417982845_062022-P.webp"
                            alt="Escritorio RTA Madera" />
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
                        <h3>Escritorio RTA Madera</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$184.990</p>

                    </div>
                </div>
                <div class="card-product categoria-hogar">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_Q_NP_968239-MLA49706417428_042022-P.webp"
                            alt="Silla de escritorio" />
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
                        <h3>Silla de escritorio</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$384.900</p>

                    </div>
                </div>

                <div class="card-product categoria-hogar">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_Q_NP_617468-MLA50417982845_062022-P.webp"
                            alt="Escritorio RTA Madera" />
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
                        <h3>Escritorio RTA Madera</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$184.990</p>

                    </div>
                </div>
                <div class="card-product categoria-hogar">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_Q_NP_699216-MLU71078943501_082023-P.webp"
                            alt="Colchon Doble Espuma" />
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
                        <h3>Colchon Doble Espuma</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$964.100</p>

                    </div>
                </div>

                <div class="card-product categoria-moda">
                    <div class="container-img">
                        <img  src="	https://http2.mlstatic.com/D_Q_NP_673857-MCO53666546206_022023-P.webp"
                            alt="Pantaloneta Sport" />
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
                        <h3>Pantaloneta Sport</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$84.900</p>

                    </div>
                </div>

                <div class="card-product categoria-moda">
                    <div class="container-img">
                        <img height="250px"  src="https://http2.mlstatic.com/D_NQ_NP_721153-MCO69305752719_052023-W.webp"
                            alt="Tenis Adidas Hombre" />
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
                        <h3>Tenis Adidas Hombre</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$272.900</p>

                    </div>
                </div>

                <div class="card-product categoria-moda">
                    <div class="container-img">
                        <img  src="https://http2.mlstatic.com/D_NQ_NP_649581-MCO52526847778_112022-W.webp"
                            alt="Chaqueta Mujer Facol" />
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
                        <h3>Chaqueta Mujer Facol</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$82.100</p>

                    </div>
                </div>

                <div class="card-product categoria-moda">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_718076-MCO53056150895_122022-W.webp"
                            alt="Chaqueta Acolchada Hombre" />
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
                        <h3>Chaqueta Acolchada Roja</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                        <p class="price">$179.000</p>

                    </div>
                </div>

                <div class="card-product categoria-deportes">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_662213-MCO53928335104_022023-P.webp"
                            alt="Gold Standard 5lb" />
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
                        <h3>Gold Standard 5lb</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$368.000</p>

                    </div>
                </div>

                <div class="card-product categoria-deportes">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_834905-MCO49129897606_022022-P.webp"
                            alt="Protein Proscience 2lb" />
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
                        <h3>Protein Proscience 2lb</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$200.000</p>

                    </div>
                </div>

                <div class="card-product categoria-deportes">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_610286-MCO53780294628_022023-P.webphttps://http2.mlstatic.com/D_Q_NP_610286-MCO53780294628_022023-P.webp"
                            alt="Scooter Patineta Electrica" />
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
                        <h3>Scooter Patineta Electrica</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$1.749.990</p>

                    </div>
                </div>

                <div class="card-product categoria-deportes">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_891842-MCO69998982085_062023-P.webp"
                            alt="Caminadora Electrica" />
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
                        <h3>Caminadora Electrica</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$1.200.920</p>

                    </div>
                </div>

                <div class="card-product categoria-cuidado">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_699558-MCO70652717164_072023-P.webp"
                            alt="Kit Hidratacion Capilar" />
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
                        <h3>Kit Hidratacion Capilar</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$265.430</p>

                    </div>
                </div>

                <div class="card-product categoria-cuidado">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_753917-MCO50257853630_062022-P.webp"
                            alt="Perfume Antonio Banderas" />
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
                        <h3>Perfume Antonio Banderas</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$130.990</p>

                    </div>
                </div>

                <div class="card-product categoria-cuidado">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_695606-MCO49735978241_042022-P.webp"
                            alt="Shampoo Hombre Whisky" />
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
                        <h3>Shampoo Hombre Whisky</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$41.900</p>

                    </div>
                </div>

                <div class="card-product categoria-cuidado">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_895866-MCO54923078880_042023-P.webp"
                            alt="Dermabsolu Avene" />
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
                        <h3>Dermabsolu Avene</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$189.000</p>

                    </div>
                </div>

                <div class="card-product categoria-cuidado">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_720412-MCO70653197062_072023-P.webp"
                            alt="Kit Cuidado Facial" />
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
                        <h3>Kit Cuidado Facial</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$265.430</p>

                    </div>
                </div>

                <div class="card-product categoria-cuidado">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_Q_NP_732420-MCO71802172659_092023-P.webp"
                            alt="Spary Anticaida" />
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
                        <h3>Spary Anticaida</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$120.990</p>

                    </div>
                </div>

                <div class="card-product categoria-accesorios">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_863961-MLA49011508089_022022-V.webp"
                            alt="Xiaomi Lite Redmi Watch 2 Lite " />
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
                        <h3>Xiaomi Redmi Watch </h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$219.900</p>

                    </div>
                </div>

                <div class="card-product categoria-accesorios">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_868754-MLA70304804051_072023-V.webp"
                            alt="Audífonos Lenovo GM2" />
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
                        <h3>Audífonos Lenovo GM2</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$55.260</p>

                    </div>
                </div>

                <div class="card-product categoria-accesorios">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_710273-MLA52127704169_102022-V.webp"
                            alt="Apple Watch Series 8 GPS" />
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
                        <h3>Apple Watch Series 8</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$1.872.000</p>

                    </div>
                </div>

                <div class="card-product categoria-accesorios">
                    <div class="container-img">
                        <img src="https://http2.mlstatic.com/D_NQ_NP_938092-MLA45480677826_042021-V.webp"
                            alt="Audifonos in-ear" />
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
                        <h3>Audifonos in-ear F9</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </span>
                           <p class="price">$90.990</p>

                    </div>
                </div>
            </div>
        </section>
    </main>
    @endsection
