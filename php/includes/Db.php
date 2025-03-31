<?php

class Db extends MySQLi
{
    static protected $instance = null;

    public_construct($host, $usr, $password, $schema)
    {
        parent::__construct($host, $usr, $password, $schema)
    }

    static function getInstance(){
        if(self::$instance==null)
            self::$instance = new Db('my_mariadb', 'root', 'ciccio', 'scuola')
        return self::$instance;
    }
}



?>