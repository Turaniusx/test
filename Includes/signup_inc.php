<?php
//if the user submited the sign up form the proper way
//then we run the php code in this file
//if not, then we send them back to the sign up page
if (isset($_POST["submit"]))  {
//asking if we've set particular piece of data in the URL,
//if it's there then the user accessed this page using the correct method
       $userName = $_POST["userName"];
       $userEmail = $_POST["userEmail"];
       $userPass = $_POST["userPass"];
       $userPassRep = $_POST["userPassRep"];

       require_once 'database_inc.php';
       require_once 'functions_inc.php';
       //catching errors - functions
       if (emptyInputSignup($userName, $userEmail, $userPass, $userPassRep) !== false) { //if we === true, and if by any chance it returns anyhting besides true or false, it wont be seen as an error
        //anything besides false, throw an error function
            header("location: ../signup.php?error=emtpyinput");
            exit(); //stops the script from running
       }
       if (invalidUsername($userName) !== false) {
        //invalid username
            header("location: ../signup.php?error=invalidUsername");
            exit();
       }
       if (invalidEmail($userEmail) !== false) {
        //incorrect email
            header("location: ../signup.php?error=invalidEmail");
            exit();
       }
       if (passwordMatch($userPass, $userPassRep) !== false) {
        //missmatched passwords
            header("location: ../signup.php?error=passwordsdontmatch");
            exit();
       }
       if (userExists($conn, $userName, $userEmail) !== false){ 
        //passing a connection to the DB to check if the username already exists
            header("location: ../signup.php?error=usernametaken");
            exit();
       }

       
    createUser($conn, $userName, $userEmail, $userPass); //signing up the user

} else {
    header("location: ../signup.php"); //a function that can send the user to another place
    exit();
    
}
   