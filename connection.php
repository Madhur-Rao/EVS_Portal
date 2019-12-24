<?php
    
    // Setting up important variables
    $servername = 'localhost';
    $username = "test0";
    $password = "helloiitr";
    $db = "EVS";

    // establishing connection with DB
    $conn = new mysqli($servername,$username,$password,$db);

    //if there is connection error with server, then echo "Connection Failed"
    if($conn->connect_error){
        die("Connection Failed: ". $conn->connect_error);
    }
?>
