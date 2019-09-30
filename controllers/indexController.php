<?php

class indexController{

    public function __construct(){
        //Seguridad.

    }

    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    //Crear
    public function create(){
        echo 'hola desde create';
    }

    //Almacenar
    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }



}