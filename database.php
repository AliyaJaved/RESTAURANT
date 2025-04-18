<?php
require_once("connection.php");
$sql="CREATE DATABASE IF NOT EXISTS rposystem";
$res=mysqli_query($con,$sql);
if($res)
{
    echo "database created";
}
else
{
    echo "database not created";
}
?>