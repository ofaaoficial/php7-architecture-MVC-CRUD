<?php

class userController extends User{
    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

}