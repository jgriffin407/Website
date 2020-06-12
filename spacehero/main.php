<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA Compatible" content="ie-edge">
    <link rel = "stylesheet" href ="style.css">
    <title>Space Hero</title>
</head>
<body>
    <div id = "background">
        <h1>SPACE HERO</h1>
        <button onclick ="window.location.href='game.php'" class = "button">Play</button>
        <button class = "button" onclick = "showControls()">Controls</button>
        <div id = "controls" style="display:hidden"></div>
    </div>
   <script>
        function showControls() {
            var controlsList = ["Move Left -> Left Arrow ", "Move Right -> Right Arrow ",  "Move Down -> Down Arrow " , 
  "Move Up -> Up Arrow " , "Fire Laser -> Spacebar "];
            var controls = document.getElementById('controls').innerHTML = controlsList.join("<br>");
    }
   </script>
</body>
</html>