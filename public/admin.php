<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
?>

<?php
$serverName = "serverName\http://sql11.freesqldatabase.com/"; //serverName\instanceName
$connectionInfo = array( "Database"=>"sql11415927", "UID"=>"sql11415927", "PWD"=>"tPjyXDsEqM");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>

<html lang="es">

<head>
	<style type="text/css">
    #contenedor {
        width: 400px;
        margin: 0 auto;
    }
    </style>
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
    <?php 
    if (isset($_POST['borrarUsuarios'])) {
        $borr = mysqli_query($conexion, "DELETE FROM usuarios WHERE idUsuario = ". $_POST['borrarUsuarios']);
    }?>

</head>
<body background="../images/patron.png">

<div id="contenedor">
<h3>Administrar posts</h3>
<?php 
$comprobarPost = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM posts"));
$verPost = mysqli_query($conexion,"SELECT * FROM posts");
if ($comprobarPost == 0) {
    print "A&uacute;n no hay publicaciones";
}else{
    while ($row = mysqli_fetch_array($verPost)) {
        
        $post = $row['post'];
        $fecha = $row['fecha'];
        $idP = $row['idPost'];
        $escritor = $row['nicknameEscribe'];
        
        print "
        <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
      			<div class='card-header'>Fecha: ". $fecha ." || Usuario: ". $escritor ." <form action='admin.php' method='Post'>
                        <button type='submit' name='borrar' value='$idP' class='close' data-dismiss='alert'>&times;</button>
                    </form></div>
                
      				<div class='card-body bg-dark'>" . $post . "</div>
    		</div><br>";
    }
}

?>
</div>
<br>
<div class="progress">
  					<div class="progress-bar bg-dark" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			  </div>
<br>

<div id="contenedor">
<h3>Administrar usuarios</h3>
<?php 
$comprobarUsuario = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM usuarios where nickname != 'admin'"));
$verUsuarios = mysqli_query($conexion,"SELECT * FROM usuarios where nickname != 'admin'");
if ($comprobarUsuario == 0) {
    print "A&uacute;n no hay usuarios";
}else{
    while ($row = mysqli_fetch_array($verUsuarios)) {
        $idU = $row['idUsuario'];
        
        print "
        <div class='card text-white bg-primary mb-3' style='max-width: 20rem;'>
      			<div class='card-header'>" . $row['nombre'] . " " . $row['apellido'] . " - " . $row['nickname'] . "<form action='admin.php' method='Post'>
                        <button type='submit' name='borrarUsuarios' value='$idU' class='close' data-dismiss='alert'>&times;</button>
                    </form></div>
    		</div><br>";
    }
}

?>
</div>
</body>
</html>