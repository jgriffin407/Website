<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <!--Local CSS-->
    <link rel = "stylesheet" href ="css/style.css">
    <!--Bootstrap 4 CDN-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Hangman</title>
</head>
<body>
<div class ="container">
<h1 class ="text-center">Hangman</h1>
<div class="float-right">Wrong Guesses: <span id ="mistakes">0</span> of <span id="maxWrong"></span></div>
<div class="text-center">
    <img id='hangmanPic' src = "img/0.jpg" alt=''>
    <p>Category: Food</p>
    <p>Guess the word:</p>
    <p id="wordSpotlight">The word to be guessed goes here</p>
    <div id="keyboard"></div>
    <button class="btn btn-info" onclick="reset()">Reset</button>
</div>
</div>

<script src = "js/hangman.js"></script>
<div class = "footer">
<p>&copy; Copyright 2020 John Griffin - All Rights Reserved</p>
</div>
</body>
</html>