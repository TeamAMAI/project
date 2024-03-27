<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
    <nav>





    </nav>

    <div id="question1">

        <p>hi</p>

        <form action="showQuestion1" method="get">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion2()">
        </form>

    </div>

    <div id="question2">

        <p>hello</p>

        <form action="main.php" method="get">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion3()">
        </form>

    </div>

    <div id="question3">

        <p>hey</p>

        <form action="main.php" method="get">
            <button class="nextButton1" type="button" name="next" value="Next" onclick="showQuestion4()">
        </form>

    </div>




</body>
<script src="script.js"></script>
</html>