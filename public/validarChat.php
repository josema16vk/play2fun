<?php
    require_once("..\proyecto_load.php");
    require_once("..\load_session.php");
    $conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());

    $para = $_POST['para'];
    $mensaje = $_POST['mensaje'];
    
    $consulta = "select * from usuarios where nickname = '$para'";
    $comprobar = mysqli_query($conexion,$consulta);
    $de = $_SESSION['nickname'];
    $idE = $_SESSION['idUsuario'];
       
    $idR ="SELECT idUsuario FROM usuarios WHERE nickname = '$para'";
    $cosa = mysqli_query($conexion,$idR);
    $varia = mysqli_fetch_assoc($cosa);
    
    
    if($row = mysqli_fetch_array($comprobar)){
        if($row['nickname'] == $para){
          
            $mandar = mysqli_query($conexion,"insert into mensajes (idUsuarioE,idUsuarioR,de,para,mensaje,fecha) values 
            (" . $idE . "," . $varia['idUsuario'] . ",'$de','$para','$mensaje',now())");
            header("Location: chat.php");
        }
    }else{
        header("Location: chat.php");
    }

?>
