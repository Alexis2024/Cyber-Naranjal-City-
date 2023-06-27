<?php
    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cyber - Inicia sesión o regístrate</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="icon" href="assets/images/icono.ico">
        <link rel="stylesheet" href="assets/css/estilos.css">

    </head>
    <body>
        <div id="particles-js"></div>

        <header>
        <div class="center-image">
        <img src="assets/images/logo-sin-fondo.png">
        </div>
        </header>
            <main>
                <div class="contenedor__todo">
                <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuarios">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Regístrarse</button>
                </form>  
        </div>
        <br>
        <div class="omitir">
            <a href="https://alexis2024.github.io/cyber-naranjal-city/">
                <button id="Omitir" class="omitir-button">Omitir</button>
            </a>
        </div>


        <div class="center-imagen-linea-final">
            <img src="assets/images/linea sin fondo.png" class="imagen-linea">
        </div>
        

        <footer>
            <div class="copyright">
                &copy; Cyber Naranjal City
            </div>
        </footer>
            
        <script src="assets/js/script.js"></script>
        <script src="assets/js/particles.min.js"></script>
        <script src="assets/js/particlesjs-config.json"></script>
        
    </body>
</html>



