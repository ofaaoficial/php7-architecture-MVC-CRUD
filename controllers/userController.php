<?php

class userController extends User{
    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    public function __construct()
    {
        Security::verifyUser();
    }


    //Mostrar toda la informacion
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
    }

    // Mostar la vista del formulario
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/user/create.php';
        require_once 'views/layouts/footer.php';
    }

    //'Validaciones e interaccion model
    public function store(){
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        echo parent::register($_POST) ? header('location: ?controller=user') : 'Error en el registro';
    }

    //consultar y luego mostrar la informacion en el formulario
    public function edit(){
        $user = parent::find($_GET['id']);
        require_once 'views/layouts/header.php';
        require_once 'views/user/edit.php';
        require_once 'views/layouts/footer.php';
    }

    //Validaciones e interaccion model
    public function update(){
        $_POST['id'] = $_GET['id'];
        if(parent::update_register($_POST)){
            header('location:?controller=user');
        }else{
            die('Error al actualizar');
        }
    }


    //
    public function delete(){

    }

}