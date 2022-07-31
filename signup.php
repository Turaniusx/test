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
                    <input type="email" name="userEmail" placeholder="Email">
                    <input type="password" name="userPass" placeholder="Password..">
                    <input type="password" name="userPassRep" placeholder="Repeat Password..">
                    <button type="submit" name="submit" class="subButt">Sign Up</button>
                </form>

            </div>
            
        </div>
        </section>
        