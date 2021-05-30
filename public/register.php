<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Custom CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Registro</title>
</head>

<body>
    <div id="body">
        <div class="modal; visibility: visible;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Registrate en nuestra red social</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <a href="login.php" style="font-size:10px" >Ya dispongo de cuenta</a>
                        </button>
                    </div>
                    <form method="POST" action="validarRegister.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control"
                                    placeholder="Introduce tu nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" class="form-control"
                                    placeholder="Introduce tu apellido" name="apellido" required>
                            </div>
                            <div class="form-group">
                                <label>Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label>Nickname</label>
                                <input type="text" class="form-control"
                                    placeholder="Introduce tu nickname" name="nickname" required>
                            </div>
                            <div class="form-group">
                                <label>Correo electronico</label>
                                <input type="email" class="form-control"
                                    placeholder="Introduce tu correo" name="email" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="contrasena"
                                    placeholder="Introduce tu password" required>
                            </div>
                            <div class="form-group">
                                <label>Repetir la Password</label>
                                <input type="password" class="form-control" name="repcontrasena"
                                    placeholder="Reintroduce tu password" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="registrar">Confirmar</button>
                        </div>
                     </form>
                     
                </div>
            </div>
        </div>
    </div>

</body>
<html>