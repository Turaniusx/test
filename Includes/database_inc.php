<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "dbName";

    $conn = mysqli_connect($serverName, $dbUsername, $dbPassword);//opens up a connection, using mysqli because we're doing a procedural php project
                                                    //mysqli is sercure, mysql is not secure and nobody uses it
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
        