<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuarios'];
    $contrasena = $_POST['contrasena'];

    //ENCRIPTAMIENTO DE CONTRASEÑA
    //$contrasena = hash('sha512', $contrasena);

    
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    
    
    //VERIFICAR QUE EL CORREO NO SE REPITA EN LA BASE DE DATOS
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");
    if(mysqli_num_rows($verificar_correo) > 0 ){
        echo '
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }
    //VERIFICAR QUE EL NOMBRE DE USUARIO NO SE REPITA EN LA BASE DE DATOS
    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");
    if(mysqli_num_rows($verificar_usuario) > 0 ){
        echo '
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script type="text/javascript">
        alert("Usuario registrado exitosamente");
        window.location = "../index.php";
    </script>
    
    <style>
        /* Estilos personalizados para la ventana de alerta */
        .alert {
            background-color: #f1f1f1;
            color: #333;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Arial, sans-serif;
        }
    </style>
    
        ';
    }else{
        echo '
            <script>
                alert("Intentalo de nuevo, usuario no registrado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    }

    /*CERRA SERVIDOR LOCAL*/
    mysqli_close($conexion);

?>