<?php

class userController extends User{
    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    public function __construct()
    {
        Security::verifyUser();
//        die('hola');
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

        /**
         * Subida de archivos basica.
         */
//        $url_path = 'assets/imgs/' . $_FILES['file']['name'];
//        move_uploaded_file($_FILES['file']['tmp_name'], $url_path);
//        $_POST['url_image'] = $url_path;


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
        var_dump(parent::update_register($_POST));
    }


    //
    public function delete(){

    }

}