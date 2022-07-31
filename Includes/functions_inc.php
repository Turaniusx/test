<?php
    //empty fields checker function
    function emptyInputSignup($userName, $userEmail, $userPass, $userPassRep) {
        $result;
        if (empty($userName) || empty($userEmail) || empty($userPass) || empty($userPassRep)) { //empty() checks if the thing we put inside it has data or not
         //if the user didnt submit anything, run this code
            $result = true; //return true if a mistake exists
        } else {
            $result = false; //false if no empty fields
        }
        return $result;
    }
    function invalidUsername($userName) {
        $result;
         if (!preg_match("/^[a-zA-Z0-9]*$/", $userName)){ //username character or letter limiter, e.g. -> "Turan*(asd)" is not allowed 
            $result = true;
         } else {
            $result = false;
         }
         return $result;
    }
    function invalidEmail($userEmail) {
        $result;
        if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    function passwordMatch($userPass, $userPassRep) {
        $result; 
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

        if (!mysqli_stmt_prepare($stmt, $sql)) { //is this possible checker given from the info
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
