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
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
    <title>Hangman</title>
</head>
<body>
<div class = "container">
<h1 class = "text-center">Hangman</h1>
<div class="float-right">Wrong Guesses: <span id ="mistakes">0</span> of <span id="maxWrong"></span></div>
<div class="text-center">
    <img id='hangmanPic' src = "img/0.jpg" alt=''>
    <p id="category">The category goes here</p>
    <p>Guess the word:</p>
    <p id="wordSpotlight">The word to be guessed goes here</p>
    <div id="keyboard"></div>
    <div class = "row justify-content-around">
        <div class = "col-4">
            <button class="btn btn-lg btn-info mt-5" onclick="reset()">Reset</button>
        </div>
        <div class = "col-4">
            <button class ="btn btn-lg btn-warning mt-5" id="hintbtn" onclick ="giveHint()">Hint</button>
        </div>
    </div>
</div>
</div>
<script src = "js/food.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>