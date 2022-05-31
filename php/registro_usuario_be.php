<?php

    include './conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    //encriptamiento de la password
    $password = hash('sha512', $password);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, password) 
              VALUES ('$nombre_completo', '$correo', '$usuario', '$password')";

    //verificar que el correo no se repita en la base de datos
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

    //verificar que el nombre de usuario no se repita en la base de datos
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
            alert("usuario almaceando exitosamente");
            window.location = "../login.php";
        </script>
        ';
    }else{
        echo '
        <script>
            alert("intentalo de nuevo, usuario no almaceando");
            window.location = "../login.php";
        </script>
        ';
    }

    mysqli_close($conexion);


?>