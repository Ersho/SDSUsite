<?php
    require(__DIR__."/constants.php");
    $con=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
    if(!$con){
        die("Server connection faild ".mysqli_error());
    }
    $db_select=mysqli_select_db($con,DB_NAME);
    if(!$db_select){
        die("Database connection faild ".mysqli_error());
    }

?>