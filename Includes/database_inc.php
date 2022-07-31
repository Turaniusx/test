<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "dbname";
    //mysqli is used for procedural php, PDO or mysqli is used for object oriented php
    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);//opens up a connection, using mysqli because we're doing a procedural php project
                                             //mysqli is sercure, mysql is not secure and nobody uses it
    if (!$conn) { //error catcher
        die("Connection failed: " . mysqli_connect_error());
    }
    
        