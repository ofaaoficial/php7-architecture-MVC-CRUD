<?php

class Database{

    public function connect(){
        return new PDO('mysql:host=localhost;dbname=cms_ejemplo;charset=utf8;',
            'root',
            '',
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
    }

}



