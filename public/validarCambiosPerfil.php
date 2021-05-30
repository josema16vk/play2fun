<?php
    require_once("..\proyecto_load.php");
    require_once("..\load_session.php");
    $conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
    
    
    $cnombre = $_POST['cnombre'];
    $capellido = $_POST['capellido'];
    $cemail = $_POST['cemail'];
    $cnickname = $_POST['cnickname'];
    $cfoto = $_POST['foto'];
    
    if (!empty($cnombre)) {
        $cambios ="UPDATE usuarios SET nombre = '$cnombre' WHERE idUsuario = '$_SESSION[idUsuario]'";
        $modificar = mysqli_query($conexion, $cambios);
        $_SESSION[nombre] =$cnombre;
    }
    if (!empty($capellido)) {
        $cambios2 ="UPDATE usuarios SET apellido = '$capellido' WHERE idUsuario = '$_SESSION[idUsuario]'";
        $modificar = mysqli_query($conexion, $cambios2);
        $_SESSION[apellido] =$capellido;
    }
    if (!empty($cnickname)) {
        $cambios3 ="UPDATE usuarios SET nickname = '$cnickname' WHERE idUsuario = '$_SESSION[idUsuario]'";
        $modificar = mysqli_query($conexion, $cambios3);
        $_SESSION[nickname] =$cnickname;
    }
    if (!empty($cemail)) {
        $cambios4 ="UPDATE usuarios SET email = '$cemail' WHERE idUsuario = '$_SESSION[idUsuario]'";
        $modificar = mysqli_query($conexion, $cambios4);
        $_SESSION[email] =$cemail;
    }
    if (!empty($cfoto)) {
        $cambios5 ="UPDATE usuarios SET foto = '../images/$cfoto' WHERE idUsuario = '$_SESSION[idUsuario]'";
        $modificar = mysqli_query($conexion, $cambios5);
        $_SESSION[foto] =$cfoto;
    }
    if ($modificar) {
        header("Location: ".BASE_PUBLIC_URL."perfil.php");
        exit();
    }
          
?>
