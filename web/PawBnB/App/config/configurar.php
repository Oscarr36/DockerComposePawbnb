<?php 
// Desarrollo 
ini_set('display_errors' ,1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Desarrollo 


define ('RUTA_APP', dirname(dirname(__FILE__)));


//-----------------CAMBIAR ESTO-----------------------------

//define ('RUTA_URL', 'http://localhost/mvc_completo_23-24');
define ('RUTA_URL', 'https://pawbnb.es/');
define ('RUTA_PUBLIC', RUTA_URL.'public/');

//Nombre del sitio
define ('NOMBRE_SITIO', 'Pawbnb');

//Configuracion Base de Datos
define ('DB_HOST', '172.28.1.5');
define ('DB_USUARIO', 'root');
define ('DB_PASSWORD', '19235Verde');
define ('DB_NOMBRE', 'pawbnb');

//Tamaño paginacion
define('TAM_PAGINA', 2);

//Contraseña para hash de las contraseñas
define('PASSWORD_HASH', "112233445544oba");
