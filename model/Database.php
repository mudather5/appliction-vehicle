<?php
class Database{
    const   HOST = "localhost",
            DBNAM = "atelier0",
            LOGIN="root",
            PWD = "root";

    static  public function DB(){
        $db = new PDO('mysql:host='. self::HOST. ';dbname='. self::DBNAM. ';charset=utf8');

        return $db;
    }

}



?>