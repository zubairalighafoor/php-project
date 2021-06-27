<?php
    session_start();
    $con=mysqli_connect("localhost:3308","root","","user");
    if(mysqli_connect_errno()){
        echo "Error = ".mysqli_connect_errno();
        exit();
    }
    else{
        
    }
?>