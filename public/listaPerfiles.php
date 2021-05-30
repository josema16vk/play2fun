<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
$consultaPerfiles = "select * from usuarios where concat_ws(' ',nickname,nombre,apellido) Like '%" . $_POST['busqueda'] . "%'";
$result = mysqli_query($conexion, $consultaPerfiles);
?>
<html>
<head>
	<title>Lista de perfiles</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"">
</head>
<body background="../images/patron.png"> 
	<h3 align="center">Usuarios encontrados:</h3>
	<br>
	<br>
	<?php if (empty($_POST['busqueda'])) {
	    header('Location:' . getenv('HTTP_REFERER'));
	}else{
	    while ($registro = mysqli_fetch_array($result)) {
	        $filaId = $registro['idUsuario'];
	        
	        echo "
        <div align='center' style='margin: 0 auto; display: inline;'>
            <div><a href='perfilUsuario.php?id=$filaId' style='text-decoration: none;'>" . $registro['nombre'] . " " . $registro['apellido'] . " - " . $registro['nickname'] . "</a></div>
        </div><br>";
	        
	    }
	}
	?>
  </body>
  </html>