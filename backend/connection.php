<?php

    $servername = "localhost";
    $username = "root";
    $password = "rameez18";
    $dbname = "comments";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn)
    {
        echo "<script>console.log('connection successful');</script>";   
    }
    else{
        die("connection not successful " .mysqli_connect_error());
    }
?>