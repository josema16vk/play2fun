<?php 
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
require_once (__ROOT__."\proyecto_load.php");
require_once (ABSPATH."\load_session.php");

/*
En caso de que exista la variable de session cargamos la barra de navegacion para usuarios reguistrados
en caso contrario la destinada para usuarios publicos
*/

if(isset($_SESSION['nickname'])){
        
    include(HEARDER_PATH.'\header_user.php');
}else{
    include(HEARDER_PATH.'\header_public.php');
}
?>