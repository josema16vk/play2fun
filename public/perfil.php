<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
$foto = mysqli_query($conexion, "select foto from usuarios where nickname = '". $_SESSION['nickname'] ."'");
$fotoReal = mysqli_fetch_assoc($foto);
$verPost = mysqli_query($conexion, "select * from posts where idEscribe = '$_SESSION[idUsuario]' order by idPost desc");

?>
<html>
<head>
	<style type="text/css">
    #contenedor {
        width: 400px;
        margin: 0 auto;
    }
    </style>
	<title>Mi perfil</title>
	<?php 
    if (isset($_POST['borrar'])) {
        $borr = mysqli_query($conexion, "DELETE FROM posts WHERE idPost = ". $_POST['borrar']);
    }?>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"">
</head>
<body background="../images/patron.png">
	<div id="body">
		<?php 
            require_once(HEARDER_PATH.'\header_load.php');
        ?>
        <br><br>
        <div id="contenedor">
        <img width="180px" height="180px" alt="No se pudo cargar la foto" src="<?php echo $fotoReal['foto']; ?>">
        <br><br>
        <?php

        
        print "<h3>Tus datos personales:</h3> <br><h5><b>Nickname: $_SESSION[nickname] </b></h5>";
        print "<h5><b>Email: $_SESSION[email] </b></h5>";
        print "<h5><b>Nombre : $_SESSION[nombre] </b></h5>";
        print "<h5><b>Apellidos: $_SESSION[apellido] </b></h5>";
        ?>
        
        <br><br>
        <p class="lead">
           <a class="btn btn-primary btn-lg" href="cambiosPerfil.php" role="button">Cambiar perfil</a>
        </p>
       </div>
       <div class="progress">
  					<div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <br><br>
			  <div id="contenedor">
			  <h4 class="box-title">Posts propios</h4><br>
    
    <?php $comprobarPost = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM posts where idEscribe = '$_SESSION[idUsuario]'"));
        if ($comprobarPost == 0) {
        print "A&uacute;n no has publicado nada $_SESSION[nickname]";
    }else{
        while ($row = mysqli_fetch_array($verPost)) {
    
        $post = $row['post'];
        $fecha = $row['fecha'];
        $idP = $row['idPost'];
        
        print " 
        <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
      			<div class='card-header'>Fecha: ". $fecha ." <form action='perfil.php' method='Post'>
                        <button type='submit' name='borrar' value='$idP' class='close' data-dismiss='alert'>&times;</button>
                    </form>
                </div>
      			<div class='card-body bg-dark'>" . $post . "</div>
                
    		</div><br>";
        }
    }?>
    </div>
    </div>
</body>
</html>