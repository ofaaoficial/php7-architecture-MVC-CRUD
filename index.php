<?php
session_start();

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';

spl_autoload_register(function($class){
    if(file_exists("controllers/{$class}.php")){
        require_once "controllers/{$class}.php";
    }else if(file_exists("models/{$class}.php")){
        require_once "models/{$class}.php";
    }else{
        die('The file no exists.');
    }
});

$controller = "{$controller}Controller";
call_user_func([new $controller(), $method]);