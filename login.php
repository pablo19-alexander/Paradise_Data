<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: ./index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-Paradise Data</title>
    <link rel="icon" type="image/x-icon" href="./assets/login.png" />
    <link rel="stylesheet" href="./css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <header>

        </header>

        <div class="contenedor">
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesion para entrar en la pagina</p>
                    <button id="btn_iniciar_sesion">Iniciar Sesion</button>
                </div>
                <div class="caja_trasera_register">
                    <h3>¿Aun no tienes una cuenta?</h3>
                    <p>Registrate para que puedad iniciar sesion</p>
                    <button id="btn_registrarse">Registrarse</button>
                </div>
            </div>

            <!-- formulario de login y resgistro-->
            <div class="contenedor_login_register">
                <!-- login -->
                <form action="./php/login_usuario_be.php" method="POST" class="formulario_login">
                    <h2>Iniciar Sesion</h2>
                    <input type="email" placeholder="Correo Electronico" name="correo">
                    <input type="password" placeholder="contraseña" name="password">
                    <button>Entrar</button>
                </form>

                <!-- registro -->

                <form action="./php/registro_usuario_be.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="email" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="contraseña" name="password">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="./js/scripts.js"></script>
</body>

</html>