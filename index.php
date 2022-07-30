
<?php
    $name = "Turan";
    echo "dimitar <br>";
    echo $name;
 ?>

<p>ajkshdkasd</p>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tester</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <nav class="nav">yo</nav>
    <div class="main">
        <section>
            <h1 align="center" class="h1"><br>something</h1>
            <div class="div1">
                
                <p >Image uploader</p>
                <form method="upload"></form>
                <input type="file" name="upload" placeholder="stfu">
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
        
        
    </div>
    <script src="scripts.js">

    </script>
    
</body>
</html>

