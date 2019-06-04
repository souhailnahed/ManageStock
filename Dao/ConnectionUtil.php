<?php

class ConnectionUtil
{
    private static $instance;

    private function __construct(  $instance)
    {
        $this->instance=$instance;
        
    }

    public static function getInstance()
    {
        if(self::$instance == null)
            self::$instance = new PDO("mysql:dbname=manage_stock; host=localhost"
                ,"root","");
        echo'test connection';
        return self::$instance;

    }

}


