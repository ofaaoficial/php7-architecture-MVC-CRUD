<?php
//Herencia
class User extends Database{

    public function all(){
        $result = parent::connect()->prepare("SELECT * FROM test");
        $result->execute();
        return $result->fetchAll();
    }

}
