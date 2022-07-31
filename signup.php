<?php
    include_once 'header.php';
    include_once 'footer.php';
 ?>
   
        <section class="signup-form">
        <div class="main">
            <div class="signUp">
              <h2 class="signH2">Sign Up</h2>
              <form action="includes/signup_inc.php" method="post">
                    <input type="text" name="userName" placeholder="Username..">
                    <input type="email" name="userEmail" placeholder="Email..">
                    <input type="password" name="userPass" placeholder="Password..">
                    <input type="password" name="userPassRep" placeholder="Repeat Password..">
                    <button type="submit" name="submit" class="subButt">Sign Up</button>
                </form>
                <?php
        if(isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all the fields in the form</p>";
            }
            else if ($_GET["error"] == "invalidEmail") {
                echo "<p>Choose a proper username!</p>";
            }
            else if ($_GET["error"] == "invalidUsername") {
                echo "<p>Choose a proper Email!</p>";
            }
            else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords dont match!</p>";
            }
            else if ($_GET["error"] == "usernametaken") {
                echo "<p>Username or Email is taken.</p>";
            }
            else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Something went wrong.</p>";
            }
            else if ($_GET["error"] == "none") {
                echo "<p>you have signed up</p>";
            }

        }
     ?>

            </div>
            
        </div>
        </section>

    
        