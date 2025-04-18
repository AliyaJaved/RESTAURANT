<?php
    $con=mysqli_connect("localhost","root","","");
    If(!$con){
        die ("connection failed !!".mysqli_connect_error());
    }
    else{
        echo "connection successfully !!";
    }
?>