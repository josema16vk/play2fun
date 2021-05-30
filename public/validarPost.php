<?php
    require_once("..\proyecto_load.php");
    require_once("..\load_session.php");
    $conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
    
    $texto = $_POST['texto'];
    $publicacion = $_POST['publicar'];
    
    if (!empty($texto)) {
        $publicar = mysqli_query($conexion, "insert into posts (idEscribe,nicknameEscribe,post,fecha) values ('$_SESSION[idUsuario]','$_SESSION[nickname]', '$texto', now())");
            header("Location: contenido.php");
    }else{
        header("Location: contenido.php");
    }
    
?>
