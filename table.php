<?php
require_once("connection.php");
$sql="CREATE TABLE IF NOT EXISTS `manager` 
(`Adminid` INT(6) AUTO_INCREMENT PRIMARY KEY, 
`firstname` VARCHAR(10) NOT NULL ,
`lastname` VARCHAR(10) NOT NULL ,
`email` VARCHAR(20) NOT NULL,
`date` DATE NOT NULL,
`age` VARCHAR(100))";
$res=mysqli_query($con,$sql);
if($res)
{
    echo "table created";
}
else
{
    echo "table not created";
}
?>