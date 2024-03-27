<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMAI</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <header>

        <div id="logo">
            <a href="main.php"><img src="..."></a>
        </div>
        <div id="title">
            <a href="index.html">
                <h1>AMAI</h1>
            </a>
        </div>
        
    </header>

    <div id="start">

        <p>start</p>

        <form action="" method="post">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion1()">
        </form>

    </div>

    <div id="question1">

        <p>hi</p>

        <form action="showQuestion1" method="post">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion2()">
        </form>

    </div>

    <div id="question2">

        <p>hello</p>

        <form action="main.php" method="post">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion3()">
        </form>

    </div>

    <div id="question3">

        <p>hey</p>

        <form action="main.php" method="post">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion4()">
        </form>

    </div>




</body>
<script src="script.js"></script>
</html>