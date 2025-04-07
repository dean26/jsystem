<?php

namespace App\Singleton;

class Database {

    private static ?Database $instance = null; 

    private function __construct()
    {
        echo "Lacze sie z bazadanych...";
    }

    public static function getIntance(): Database
    {
        if(self::$instance === null){
            self::$instance = new self();    
        }

        return self::$instance;
    }

    // $db1 = Database::getInstance(); 
    // $db2 = Database::getInstance();
}