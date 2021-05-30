
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php print "<a class='navbar-brand' href='#'> " .$_SESSION["nickname"]." esta loggeado</a>" ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="contenido.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chat.php">Buzon</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=BASE_PUBLIC_URL?>logout.php">Logout</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" action="listaPerfiles.php" method="post">
                <input class="form-control mr-sm-2" type="text" placeholder="Buscar" name="busqueda">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit" name="buscar">Buscar</button>
            </form>
        </div>
    </nav>