<?php 

    if(isset($_POST["submit"])){
        $userName = $_POST["user"];
        $userPass  = $_POST["pass"];

        require_once 'database_inc.php';
        require_once 'functions_inc.php';

        if (emptyInputLogin($userName, $userPass) !== false) { //error handler
            header("location: ../login.php?error=emptyinput");
            exit();
        }
        loginUser($conn, $userName, $userPass);

    } else {
        header("location: ../login.php");
        exit();
    }