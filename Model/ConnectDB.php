<?php

class cConnectDB 
{
    private  $host;
    private  $user;
    private  $password;
    private $dbname;

    protected static $instance = null;


    function __construct() 
    {
        $this->host="localhost";
        $this->user="root";
        $this->password="";
        $this->dbname="test";
    }

    public function Connection()
    {
        $conn = mysqli_connect($this->host,$this->user,$this->password,$this->dbname);
        // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        return $conn;
    }
    }

    public static function getInstance()
    {
        if (!isset(static::$instance)) {
            static::$instance = new cConnectDB;
        }
        return static::$instance;
    }


}
?>