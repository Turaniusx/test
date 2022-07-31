<?php
    include_once 'header.php';
    
    
 ?>

    <div class="main">
        <section>
            <h1 align="center" class="h1"><br>something</h1>
            
            <div class="div1">
                
                <p >Image uploader</p>
                <?php include 'includes/imgUpload_inc.php';?>
            </div>
            
            <div class="div2">
                <p>Number Incrementer</p>
                <p class="calc" id="display-el">0</p>
                <button id="increment-el" onclick="increment()">INCREMENT</button>
                <button id="decrement-el" onclick="decrement()">DECREMENT</button>
                <p>Enter an integer</p>
                <input id="num" class="field" placeholder="Type Here!">
                <button class="exe-btn" onclick="execute()">Execute</button>
                <p>
                    Factorial = <span id="fact"></span>
                </p>
                <p><a href="calculator.html" id="calcLink">Click here</a> for an actual calculator</p>
                
            </div>
        </section>
        <?php 
        include_once 'footer.php';
        ?>