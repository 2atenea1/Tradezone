<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO Y REGISTRO</title>
    <link rel="stylesheet" href="/home/sesion.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>
<body class="by">
<div class="container-form sign-up">
    <div class="welcome-back">
        <div class="message">
            <h2>Bienvenido al inicio </h2>
            <p> si ya tienes una cuenta por favor inicia sesion </p>
            <button class="sign-up-btn"> iniciar sesion </button>
        </div>
    </div>
    <form class="formulario">
        <h2 class="create-account"> crear una cuenta </h2>
        <div class="iconos">
            <div class="border-icon">
                <i class='bx bxl-facebook-circle' ></i>
            </div>
            <div class="border-icon">
                <i class='bx bxl-gmail' ></i>
            </div>
            <div class="border-icon">
                <i class='bx bxl-instagram' ></i>
            </div>
        </div>
        <p class="cuenta-gratis"> Crea una cuenta gratis </p>
        <input type="text" placeholder=" Nombre ">
        <input type="email" placeholder=" Email" >
        <input type="text" placeholder=" Contraseña ">
        <input type="checkbox" id="verificar">
        <p id="mensaje" class="cuenta-gratis"> Acepto los terminos y condiciones</p>
        <input type="button" value=" Registrarse ">
        
    </form>

</div>
<div class="container-form sign-in">
    <form class="formulario">
        <h2 class="create-account"> Iniciar sesion </h2>
        <div class="iconos">
            <div class="border-icon">
                <i class='bx bxl-facebook-circle' ></i>
            </div>
            <div class="border-icon">
                <i class='bx bxl-gmail' ></i>
            </div>
            <div class="border-icon">
                <i class='bx bxl-instagram' ></i>
            </div>
        </div>
        <p class="cuenta-gratis"> ¿Aun no tienes una cuenta? </p>
        <input type="email" placeholder="Email" >
        <input type="password" placeholder="Contraseña ">
        <input type="button" id="inicio" value="Iniciar sesion">
    </form>

    <div class="welcome-back">
        <div class="message">
            <h2>Bienvenido de nuevo </h2>
            <p> Si aun no tienes una cuenta por favor registrese aqui  </p>
            <button class="sign-in-btn"> Registrarse </button>
        </div>
    </div>
    
</div>
    
<script src="/home/sesion.js" ></script>
</body>
</html>
