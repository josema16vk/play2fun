<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
$verPost = mysqli_query($conexion, "select * from posts order by idPost desc");
?>
<html lang="es">

<head>
	<style type="text/css">
    #contenedor {
        width: 400px;
        margin: 0 auto;
    }
    </style>
    <link href="../css/estilos.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>Pagina de Inicio</title>
    <?php 
    if (isset($_POST['borrar'])) {
        $borr = mysqli_query($conexion, "DELETE FROM posts WHERE idPost = ". $_POST['borrar']);
    }?>
</head>
<body background="../images/patron.png">
    <div id="header">
        <?php 
            require_once(HEARDER_PATH.'\header_load.php');
        ?>
    </div>
    <br>
    <br>
    <div id="contenedor">
    <form action="validarPost.php" method="POST">
    	<div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
  			<div class="card-header bg-primary"><?php print($_SESSION['nickname'].", &iquest;en que est&aacute;s pensando?")?></div>
  				<div class="card-body bg-dark">
    				<textarea rows="4" cols="30" placeholder="Escribe aqui" style="resize: none" name="texto"></textarea>
  				</div>
  				<button type="submit" class="btn btn-primary" name="publicar">Publicar</button>
		</div> 
    </form>
    <br>
    </div>
              <div class="progress">
  					<div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <br><br>
			  <div id="contenedor">
			  <h4 class="box-title">Posts generales</h4><br>
    
    <?php $comprobarPost = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM posts"));
        if ($comprobarPost == 0) {
        print "A&uacute;n no hay publicaciones";
    }else{
        while ($row = mysqli_fetch_array($verPost)) {
    
        $post = $row['post'];
        $fecha = $row['fecha'];
        $idP = $row['idPost'];
        $escritor = $row['nicknameEscribe'];
        
        print " 
        <div id='prueba' class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
      			<div class='card-header'>Fecha: ". $fecha ." || Usuario: ". $escritor ." </div>
      				<div class='card-body bg-dark'>" . $post . "</div>
    		</div><br>";
        }
    }?>
    </div>  
</body>
</html>