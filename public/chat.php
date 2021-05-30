<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
require_once(HEARDER_PATH.'\header_load.php');
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
$verMensajes = mysqli_query($conexion, "select * from mensajes where idUsuarioR = '$_SESSION[idUsuario]'");


if (isset($_POST['borrar'])) {
    $borr = mysqli_query($conexion, "DELETE FROM mensajes WHERE id = ". $_POST['borrar']);
}
?>

<html>
<head>
	<style type="text/css">
    #contenedor {
        width: 300px;
        margin: 0 auto;
    }
    </style>
	<title>Buz&oacute;n</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"">
</head>
<body background="../images/patron.png">
	<div class="box-header with-border">
              <h3 class="box-title">Buz&oacute;n de mensajes</h3>
            </div>
            <p class="lead">
            	<a class="btn btn-primary btn-lg" href="perfil.php" role="button">Volver al perfil</a>
        	</p>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="validarChat.php">
                  <div class="modal-body">
                      <div class="form-group">
                          <p><font size="4" color="#2A9FD6">PARA </font></p>
                          <input type="text" class="form-control" placeholder="Introduce el nickname del destinatario" name="para" >
                       </div>
                       <br>
                       <div class="form-group">
                          <p><font size="4" color="#2A9FD6">MENSAJE </font></p>
                          <div class="form-group">
      						    <textarea class="form-control" placeholder="Introduce el mensaje" name="mensaje" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 79px;"></textarea>
    					  </div>
                        </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                     </div>
              </form>
              <br>
              <div class="progress">
  					<div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
			  <br><br>
			  <div id="contenedor">
			  <h4 class="box-title">Mensajes recibidos</h4>
			  <?php $comprobarMensajes = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM mensajes"));
                 if ($comprobarMensajes == 0) {
                    print "A&uacute;n no has recibido mensajes $_SESSION[nickname]";
                 }else{
                    while ($row = mysqli_fetch_array($verMensajes)) {
    
                       $de = $row['de'];
                       $mensaje = $row['mensaje'];
                       $fecha = $row['fecha'];
                       $idM = $row['id'];
        
                         echo " 
                         <div class='card text-white bg-primary mb-3' style='max-width: 30rem;'>
                            <div class='card-header'>De: " . $de . " || Fecha:" . $fecha . "
                                <form action='chat.php' method='Post'>
                                  <button type='submit' name='borrar' value='$idM' class='close' data-dismiss='alert'>&times;</button>
                                </form>
                            </div>   
          				    <div class='card-body bg-dark'>" . $mensaje . "</div>
        		         </div><br>";
                     }   
                  }?>
              	  </div>
</body>
</html>

