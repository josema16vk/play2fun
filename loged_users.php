<?php 
/*
comprobamos si los usuarios estan registrados 
en caso contrario los mandamos a la pagina de inicio
*/
if(!isset($_SESSION)) {
    header("Location: ".BASE_URL."/index.php");
   
}

?>