<?php
    include_once "__DIR__/../Utility.php";
    $q = $_REQUEST["q"];


    $oUtility = new cUtility;
    $arrName = $oUtility->GetName($q);
    
    
    //echo json_encode( $arrName,JSON_UNESCAPED_UNICODE) ;
    echo json_encode( $arrName,JSON_UNESCAPED_UNICODE) ;
?>