<?php
class ConnectDB
{
    private  $conn;
    private  $host='localhost';
    private  $user='root';
    private  $password='';
    private $db_name='laravel';
    private static $instance=null;

    private function __construct()
    {
        $this->conn= new PDO("mysql:host = {$this->host};dbname={$this->db_name};",$this->user,$this->password);
    }


    /**
     * @return PDO
     */
    public function getConn()
    {
        return $this->conn;
    }

    /**
     * @return null
     */
    public static function getInstance()
    {
        if(self::$instance == null)
        {
            self::$instance = new ConnectDB();
        }
        return self::$instance;
    }


}

var_dump($instance1=ConnectDB::getInstance());
var_dump($instance2=ConnectDB::getInstance());
var_dump($instance3=ConnectDB::getInstance());










