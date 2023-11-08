@extends('plantilla.plantilla')

@section('contenido')
    <div class="container2">
        <h2>Publicar Artículo</h2>
        <form>
            <div class="hero-2">
                <label for="input-file" id="drop-area">
                    <input type="file" accept="image/*" id="input-file" hidden>
                    <div id="img-view">
                        <i class="fa-solid fa-arrow-rotate-left fa-spin fa-spin-reverse"></i>
                        <p>Agregar Fotos</p>
                        <span>Sube cualquier imagen desde el escritorio</span>
                    </div>
                </label>
            </div>
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="detalles">Detalles:</label>
            <textarea id="detalles" name="detalles" rows="4" required></textarea>

            <label for="categoria">Categoría:</label>
            <select id="categoria" name="categoria" required>
                <option value="vehiculos">Vehiculos</option>
                <option value="tecnologia">Tecnologia</option>
                <option value="juegos">Juegos y Juguetes</option>
                <option value="hogar">Hogar y Muebles</option>
                <option value="moda">Moda</option>
                <option value="cuidado">Cuidado Personal</option>
                <option value="accesorios">Accesorios</option>
                <option value="herramientas">Herramientas</option>
                <option value="electrodomesticos">Electrodomesticos</option>
                <option value="libros">Libros, Revistas y Comics</option>

                <!-- Agrega más opciones de categorías aquí -->
            </select>

            <label for="estado">Estado del Producto:</label>
            <select id="estado" name="estado" required>
                <option value="nuevo">Nuevo</option>
                <option value="usado">Usado-Como Nuevo</option>
                <option value="usado">Usado-Buen Estado</option>
                <option value="usado">Usado-Aceptable</option>
            </select>
        </form>
    </div>
    <div class="confirmation-container">
        <form id="articuloForm" action="#" method="post">
            <label for="tipo">Tipo de Publicación:</label>
            <select id="tipo" name="tipo" onchange="mostrarOpciones()">
                <option value="vender">Vender</option>
                <option value="intercambiar">Intercambiar</option>
            </select><br><br>

            <div id="opcionesVender" style="display: none;">
                <label for="precio">Precio:</label>
                <input type="text" id="precio" name="precio"><br><br>

                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad">
                <br>
                <br>
                <br>

            </div>
            <input type="submit" class="button-confir" value="Publicar">
            <input type="submit" class="button-cancel" value="Cancelar">
        </form>
    </div>
@endsection
