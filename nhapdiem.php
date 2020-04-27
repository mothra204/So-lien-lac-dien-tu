<?php 
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $dbname="test";

    $RoleID;

     // Create connection
    $conn = mysqli_connect($host,$user,$password,$dbname);
     // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>    