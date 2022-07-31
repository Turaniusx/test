
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <a href="index.php"><img src="img/fflogo.png" alt="logo" class="logo"></a>
            <div class="navButtons"><a href="index.php">HOME</a></div>
            <div class="navButtons"><a href="calculator.php">APPS</a></div>
            <div class="navButtons"><a href="signup.php">SIGN UP</a></div>
            <div class="navButtons"><a href="login.php">LOGIN</a></div>
        </div>
    </nav>
    <section>
        <div class="container">
            <div id="display"></div> <!--Displejo na digitrono-->           
            <div class="buttons">
                <div class="kopce">Ce</div>
                <div class="kopce">/</div>
                <div class="kopce">*</div>
                <div class="kopce">&larr;</div>
                <div class="kopce">7</div>
                <div class="kopce">8</div>
                <div class="kopce">9</div>
                <div class="kopce">-</div>
                <div class="kopce">4</div>
                <div class="kopce">5</div>
                <div class="kopce">6</div>
                <div class="kopce">+</div>
                <div class="kopce">1</div>
                <div class="kopce">2</div>
                <div class="kopce">3</div>
                <div class="kopce">!</div>
                <div class="kopce">(</div>
                <div class="kopce">0</div>
                <div class="kopce">)</div>
                <div id="equal" class="kopce">=</div>
            </div>
        </div>
    </section>
    <script src="scripts.js"></script>
    
</body>
</html>