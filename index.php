
<?php

//$_GET = DATOS ATRAVES DE LA URL.
//$_POST = ENVIAR DATOS DE MANERA OCULTA.
//$_REQUEST = ADMINISTRA TODOS LOS TIPOS DE PETICIONES.

/**
 * isset () = Valida si la variable existe y ademas si el valor no es null.
 * Estas lineas se remplazan con le if ternario.
 */
//$controller = '';
//if(isset($_GET['controller'])){
//    $controller = $_GET['controller'];
//}else{
//    $controller = 'index';
//}

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

/**
 * include = Importar el archivo y si el archivo no existe continua el flujo de ejecucion.
 * require = Importar el archivo y si el archivo no existe para el flujo de ejecuion.
 * include_once =
 * require_once =
 */

require_once 'models/Database.php';
require_once 'models/User.php';

require_once 'controllers/indexController.php';
require_once 'controllers/userController.php';

call_user_func(["{$controller}Controller", $method]);






/**
 * Maneras de concatenar variables.
 */
//$controller .= "Controller";
//$controller = $controller . "Controller";
//var_dump("{$controller}Controller");



