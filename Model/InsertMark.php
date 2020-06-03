<?php 
    include_once "__DIR__/../ConnectDB.php";
    $connection = cConnectDB::getInstance()->Connection();
    $idSv = $_POST['idSv'];
    $idClass = $_POST['idClass'];
    $mark = $_POST['Mark'];


    $sql = "insert INTO diem(Diem, SINH_VIEN_ID_SV, MON_HOC_ID_MON_HOC) VALUES ('$mark','$idSv','$idClass')";
    $query = mysqli_query($connection,$sql);
    if($query){
        echo "New record created successfully";
    } else{
        echo "Error".$sql."<br>";
        $connection->error;
    }
    $connection->close();
?>