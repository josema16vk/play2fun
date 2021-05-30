
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <meta charset="utf-8">
    <title>Login</title>
</head>

<body>
    <div id="body">
        <div class="modal; visibility: visible;">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                    </div>
                    <form method="POST" action="validarLogin.php">
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Direccion de correo electronico</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                    placeholder="Introducir email" name="nEmail">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Contrasena</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="nPassword"
                                    placeholder="Contrasena">
                            </div>
                        </div>
                        <div class="modal-footer">
                        	<button class="btn btn-secondary" value='Registro' name='register'><a href="register.php">Registro</a></button>
                           
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                </div>
            </div>
        </div>
    </div>

</body>
<html>