<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

spl_autoload_register(function($class){
    if(file_exists("controllers/{$class}.php")):
        require_once "controllers/{$class}.php";
    else:
        die('Error el archivo existe');
    endif;
});

$controller .= 'Controller';
call_user_func([$controller, $method]);
