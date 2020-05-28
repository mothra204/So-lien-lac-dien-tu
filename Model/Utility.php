<?php
include_once "__DIR__/../ConnectDB.php";

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
    function GetName($className)
    {
        
        $connection = cConnectDB::getInstance()->Connection();
        
        $result = mysqli_query($connection, "select id_sinh_vien,name FROM sinh_vien where class ='".$className."'");
        $arrRecord = [];
        
        while($row = mysqli_fetch_assoc($result)) 
        {
            if ($row['name'] != NULL && $row['id_sinh_vien'] != NULL)
            {
                array_push($arrRecord,$row['name'],$row['id_sinh_vien']);
            }
            
        }
        return $arrRecord ;
        
        
    }
}
?>