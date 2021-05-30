<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"">
</head>
<body background="../images/patron.png"> 
	<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar mi perfil</h3>
            </div>
            <p class="lead">
            	<a class="btn btn-primary btn-lg" href="perfil.php" role="button">Volver al perfil</a>
        	</p>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="POST" action="validarCambiosPerfil.php">
                  <div class="modal-body">
                      <div class="form-group">
                          <label>Nombre</label>
                          <input type="text" class="form-control" placeholder="Introduce tu nombre" name="cnombre" >
                       </div>
                       <div class="form-group">
                           <label>Apellido</label>
                           <input type="text" class="form-control" placeholder="Introduce tu apellido" name="capellido" >
                        </div>
                        <div class="form-group">
                            <label>Nickname</label>
                            <input type="text" class="form-control" placeholder="Introduce tu nickname" name="cnickname" >
                         </div>
                         <div class="form-group">
                            <label>Correo electronico</label>
                            <input type="email" class="form-control" placeholder="Introduce tu correo" name="cemail">
                         </div>
                         <div class="form-group">
                  			<label>Cambiar mi avatar</label>
                  			<input type="file" name="foto">
                         </div>
                     </div>
                     <div class="modal-footer">
                         <button type="submit" class="btn btn-primary" name="cambios">Confirmar</button>
                     </div>
              </form>
  </body>
  </html>