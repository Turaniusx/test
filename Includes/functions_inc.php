<?php
require_once 'database_inc.php';
    //empty fields checker function
    function emptyInputSignup($userName, $userEmail, $userPass, $userPassRep) {
        
        if (empty($userName) || empty($userEmail) || empty($userPass) || empty($userPassRep)) { //empty() checks if the thing we put inside it has data or not
         //if the user didnt submit anything, run this code
            $result = true; //return true if a mistake exists
        } else {
            $result = false; //false if no empty fields
        }
        return $result;
    }
    function invalidUsername($userName) {
        
         if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)){ //username character or letter limiter, e.g. -> "Turan*(asd)" is not allowed 
            $result = true;
         } else {
            $result = false;
         }
         return $result;
    }
    function invalidEmail($userEmail) {
       
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function passwordMatch($userPass, $userPassRep) {
        
        if ($userPass !== $userPassRep) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function userExists($conn, $userName, $userEmail) {
        $sql = "SELECT * FROM users WHERE userName = ? OR userEmail = ?;"; //selects all users from userName column
        $stmt = mysqli_stmt_init($conn); //initializing prepared statement for security like sql injection
        //creating prepared statements and tying the $sql statement with the prepared statement
        //to make sure it runs in the database without any user input and then later
        //we add the input from the user to run separately without any code injections in our db
        if (!mysqli_stmt_prepare($stmt, $sql)) { //checking if this statement will fail or any mistakes that happened
            header("location: ../signup.php?error=stmtfailed"); //an error message
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $userName, $userEmail); //passing in the statement from the user
        mysqli_stmt_execute($stmt); //executing the statement

        $resultData = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($resultData)) { //fetching a data as an associative array (a row) and to see anything using the resultData 
            return $row; //returns all the data to the form if the user already exists in the DB
        } else {
            $result = false;
            return $result;
        }
       
        
        mysqli_stmt_close($stmt); //closing the statement
    }
    function createUser($conn, $userName, $userEmail, $userPass) {
        $sql = "INSERT INTO users (userName, userEmail, userPass) VALUES (?, ?, ?)";
        $stmt = mysqli_stmt_init($conn); 

        if (!mysqli_stmt_prepare($stmt, $sql)) { //"is-this-possible-checker" given from the info
            header("location: ../signup.php?error=stmtfailed");
            exit();
        }
        $hashedPass = password_hash($userPass, PASSWORD_DEFAULT); //hashing the user input password
        //using the default password hash algorithm
        mysqli_stmt_bind_param($stmt, "sss", $userName, $userEmail, $hashedPass);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php?error=none");
    }
    function emptyInputLogin($userName, $userPass) {
        if (empty($userName) || empty($userPass))  {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function loginUser($conn, $userName, $userPass) {
        $uidExists = userExists($conn, $userName, $userName); //the 2nd $userName is basically a replacement for the Email
                                                              //we only need 1 or the other to be true so it functions
        if($uidExists === false) {
            header("location: ../login.php?error=wronglogin");
            exit();
        }
        $passHashed = $uidExists["userPass"]; //an asociative array doesnt use index numbers but uses names for each index in the array
        //passHashed = the password in the database

        $checkPass = password_verify($userPass, $passHashed); 
        //checks the user password input with the one in the db

        if ($checkPass === false) { //if false, passes dont match
            header("location: ../login.php?error=wronglogin");
            exit();
        } else if ($checkPass == true) {
            //if we wanna store data into a session which is information we can grab onto
            //from anywhere inside the website as long as we have a session running
            //we need to start a session first
            session_start();
            $_SESSION["usersId"] = $uidExists["usersId"];
            $_SESSION["userName"] = $uidExists["userName"]; //uidExists["userName"] grabs username from the DB
            //in the future be less confusing how you name your variables!!!!!
            header("location: ../index.php");
            exit();
        }
    }
