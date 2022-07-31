<?php
    include_once 'header.php';
    include_once 'footer.php';
 ?>
   
        <section class="signup-form">
        <div class="main">
            <div class="signUp">
              <h2 class="signH2">LOGIN</h2>
              <form action="includes/login_inc.php" method="post">
                  <input type="text" name="user" placeholder="Username/Email..">
                    <input type="password" name="pass" placeholder="Password..">
                    <input type="password" name="passRep" placeholder="Repeat Password..">
                    <button type="submit" name="submit" class="subButt">Sign Up</button>
                    </form>


<?php
        if(isset($_GET["error"])) { //error handler
            if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all the fields in the form</p>";
            }
            else if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect information</p>";
            }
        }
?>
            </div>
            
        </div>
        </section>