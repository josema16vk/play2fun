<?php 
/*
Creamos la session en caso de que en esa página no se haya creado.
*/
if(!isset($_SESSION)) {
     session_start();
}
?>