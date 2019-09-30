<?php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'index';
$method = isset($_GET['method']) ? $_GET['method'] : 'index';



require_once 'models/Database.php';
require_once 'models/User.php';

require_once 'controllers/indexController.php';
require_once 'controllers/userController.php';

call_user_func(array( "{$controller}Controller" , $method ));