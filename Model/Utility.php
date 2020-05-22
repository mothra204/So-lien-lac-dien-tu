<?php
include_once "__DIR__/../ConnectDB.php";

$q = $_REQUEST["q"];

$hint = "";         
class cUtility
{
    private $connection;
    
    function __construct() 
    {
        
    }


    function GetClass()
    {
        $connection = cConnectDB::getInstance()->Connection();
        
        $result = mysqli_query($connection, "select distinct class FROM sinh_vien");
        $arrRecord = [];
        
        while($row = mysqli_fetch_assoc($result)) 
        {
            if ($row['class'] != NULL)
            {
                array_push($arrRecord,$row['class']);
            }
            
        }
        return $arrRecord ;
    }
    function GetName(){
        $connection = cConnectDB::getInstance()->Connection();
        
        $result = mysqli_query($connection, "select name FROM sinh_vien where class ='".$q."'");
        $arrRecord = [];
        
        while($row = mysqli_fetch_assoc($result)) 
        {
            if ($row['name'] != NULL)
            {
                array_push($arrRecord,$row['name']);
            }
            
        }
        return $arrRecord ;
    }
}
?>