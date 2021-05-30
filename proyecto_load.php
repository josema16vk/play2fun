<?php
/*
Cargamos una serie de variables globales de manera que se puedan reusar en nuestra aplicación.
*/
                
define('ABSPATH', dirname(__FILE__)  );
define('PUBLIC_PATH',dirname(__FILE__) . "\public" );
define('HEARDER_PATH',dirname(__FILE__) . "\public\headers" );


define( 'BASE_URL', "/proyectophpsocial/");
define( 'BASE_PUBLIC_URL', "/proyectophpsocial/public/");
define( 'BASE_HEADERS_URL', "/proyectophpsocial/public/headers/header_load");

/*MySQL Database Domain*/
define('DBDOMAIN','localhost');
/*MySQL Database User*/
define('DBUSER','root');
/*MySQL Database Password*/
define('DBPASSWORD','');
/*MySQL Database Name*/
define('DBNAME','pro');


?>