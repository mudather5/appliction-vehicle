<?php

class UserManager{
    private $_db;

    public function getDb(){
        
        return $this->_db;

    }

    public function setDb($db){

        $this->_db = $db;
    }
}

?>