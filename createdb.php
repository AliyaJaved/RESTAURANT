<?php
    require_once("connect.php");
    $sql="CREATE DATABASE IF NOT EXISTS rposystem";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "database is created !!";
    }
    else{
        echo "databse is not created !!";
    }
?>