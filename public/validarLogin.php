<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());


$email = $_POST['nEmail'];
$pass = $_POST['nPassword'];
 
if(empty($email) || empty($pass)){
    header("Location: ".BASE_URL."index.php");
    exit();
}



$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());

$result = mysqli_query($conexion,"SELECT * from usuarios where email='" . $email . "'");
 
if($row = mysqli_fetch_array($result)){
    if($row['contrasena'] == $pass){
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nickname'] = $row['nickname'];
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['apellido'] =$row['apellido'];
        $_SESSION['idUsuario'] =$row['idUsuario'];
        $_SESSION['foto'] =$row['foto'];
        
        

        header("Location: contenido.php");
        if ($row['nickname'] == "admin") {
            header("Location: admin.php");
        }
    }else{

        header("Location: ".BASE_PUBLIC_URL."login.php");
        exit();
    }
}else{

    header("Location: ".BASE_PUBLIC_URL."login.php");
    exit();
}
?>