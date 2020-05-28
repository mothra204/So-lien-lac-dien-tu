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

    if(isset($_POST['uname'])){
        $username = $_POST['uname'];
        $pwk = $_POST['psw'];

        $result = mysqli_query($conn, "Select * from account where Username = '".$username."' and password ='".$pwk."'");
        $row=  mysqli_num_rows($result);
        // Associative array
        // Free result set

        if($row==true){
            
            $row = $result -> fetch_array(MYSQLI_ASSOC);
            $RoleID = $row['RoleID'];
            if ($RoleID == 1 )
                $_SESSION['Role_ID'] = '1';
            elseif ($RoleID == 2 )
                $_SESSION['Role_ID'] = '2';
            
            header("Location:http://localhost:8080/So-Lien-Lac-Dien-tu/index.php");
            
        }
        else{
            echo "Kiểm tra lại tài khoản và mật khẩu .";
        }
    }
?>
<!-- <a href='javascript: history.go(-1)'>Trở lại</a> -->