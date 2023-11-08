@extends('plantilla.plantilla')

@section('contenido')


<div class="container">
    <span class="big-circle"></span>
    <img src="img/shape.png" class="square" alt="" />
    <div class="form">
        <div class="contact-info">
            <h3 class="title">¿Tienes dudas o sugerencis?</h3>
            <p class="text">
                Escribemos tu peticion, queja o reclamo que se presente en la pagina.Queremos hacer un lugar mejor
                ¡TRADE-ZONE!
            </p>

            <div class="info">
                <div class="information">
                    <img src="https://media-public.canva.com/Simnw/MAEmwKSimnw/1/tl.png" alt="">
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="index.html" autocomplete="off">
                <h3 class="title">Escribe tu PQRS</h3>
                
                <div class="input-container">
                    <label for="">Motivo de PQRS:</label>
                    <span>Motivo de PQRS:</span>
                    <select id="pqrs" name="pqrs" class="input" required>
                        <option value="" disabled selected hidden></option>
                        <option value="peticion">Peticion</option>
                        <option value="queja">Queja</option>
                        <option value="reclamo">Reclamo</option>
                        <option value="sugerencia">Sugerencia</option>
                    </select>
                </div>
                
                <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for="">Nombre</label>
                    <span>Nombre</span>
                </div>
                <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                </div>
                <div class="input-container">
                    <input type="tel" name="phone" class="input" />
                    <label for="">Asunto</label>
                    <span>Asunto</span>
                </div>
                <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Mensaje</label>
                    <span>Mensaje</span>
                </div>
                <input type="submit" value="Enviar" class="btn-2" />
            </form>
        </div>
    </div>
</div>

@endsection
