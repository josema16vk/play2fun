<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());

  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $nacimiento = date("Y.m.d",strtotime($_POST['nacimiento'])); 
  $email = $_POST['email'];
  $nickname = $_POST['nickname'];
  $contrasena = ($_POST['contrasena']);
  $repcontrasena = ($_POST['repcontrasena']);
                            
   if ($contrasena != $repcontrasena) {
       header("Location: ".BASE_PUBLIC_URL."register.php");
       exit();
   }
                            
   $comprobarnickname = mysqli_num_rows(mysqli_query($conexion,"SELECT nickname FROM usuarios WHERE nickname = '$nickname'"));
                                             
   $comprobaremail = mysqli_num_rows(mysqli_query($conexion, "SELECT email FROM usuarios WHERE email = '$email'"));
                                             
   if ($comprobarnickname > 0) {
      header("Location: ".BASE_PUBLIC_URL."register.php");
      exit();
   } else {
      if ($comprobaremail > 0) {
         header("Location: ".BASE_PUBLIC_URL."register.php");
         exit();
   }else{

       $insertar = mysqli_query($conexion, "INSERT INTO usuarios (nombre, apellido, nacimiento,foto, nickname, email, contrasena, fecha_reg) values ('$nombre','$apellido', '$nacimiento','../images/defecto.jpg','$nickname','$email','$contrasena', now())");

       if ($insertar) {
           header("Location: ".BASE_PUBLIC_URL."registrado.php");
           exit();
       }
    }
   }
?>