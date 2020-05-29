<?php 
    include_once "__DIR__/../ConnectDB.php";

    $idSv = $_POST['idStudent'];
    $idClass = $_POST['idClass'];
    $mark = $_POST['Mark'];

    $connection = cConnectDB::getInstance()->Connection();
    $sql = "insert INTO `diem`(`Diem`, `SINH_VIEN_ID_SV`, `MON_HOC_ID_MON_HOC`) VALUES (['$mark'],['$idSv'],['$idClass'])";
    $query = mysqli_query($connection,$sql);
    if($query){
        echo "New record created successfully";
    } else{
        echo "Error".$sql."<br>";
        $connection->error;
    }
    $connection->close();
?>