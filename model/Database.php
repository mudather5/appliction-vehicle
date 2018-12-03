<?php

class Database{

    const   HOST = "localhost",
            DBNAME = "vehicles",
            LOGIN="root",
            PWD = "root";

    static  public function DB(){

        $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::DBNAME , self::LOGIN, self::PWD);

        return $db;
    }

}



?>