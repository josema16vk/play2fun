<?php
require_once("..\proyecto_load.php");
require_once("..\load_session.php");
$conexion = mysqli_connect(DBDOMAIN, DBUSER, DBPASSWORD, DBNAME) or die("Error al conectar " . mysqli_error());
$_SESSION['idBusqueda'] = $_REQUEST['id'];
$consulta = mysqli_query($conexion, "select * from usuarios where idUsuario = '" . $_SESSION['idBusqueda'] . "'");
$datosUsuario = mysqli_fetch_assoc($consulta);

?>
<html>
<head>
	<style type="text/css">
    #contenedor {
        width: 400px;
        margin: 0 auto;
    }
    </style>
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>
<body background="../images/patron.png">
	<div id="body">
		<?php 
            require_once(HEARDER_PATH.'\header_load.php');
        ?>
        <br><br>
        <div id="contenedor">
        <img width="180px" height="180px" alt="No se pudo cargar la foto" src="<?php echo $datosUsuario['foto']; ?>">
        <br><br>
        <?php
        print "<h3>Sus datos personales:</h3> <br><h5><b>Perfil de $datosUsuario[nickname]</b></h5>";
        print "<h5><b>Nombre : $datosUsuario[nombre] </b></h5>";
        print "<h5><b>Apellidos: $datosUsuario[apellido] </b></h5>";
        print "<h5><b>Fecha de nacimiento: $datosUsuario[nacimiento] </b></h5>";
        ?>
        </div>
    </div>
</body>
</html>