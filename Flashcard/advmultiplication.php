<!DOCTYPE html>
<head>
	<!--Bootstrap reference -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<meta charset="utf-8">
 <!-- Responsive code for mobile viewing -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href = "style/style.css">	

<script src="jquery-3.5.0.js"></script>
	<title>Advanced Multiplication</title>
	<!--Variables-->
	<script>

		var num1 = Math.floor((Math.random() * 100) + 1);
		var num2 = Math.floor((Math.random() * 100) + 1);
		var correctAnswer = num1 * num2;
		var output;
	</script>
<script> 


</script>

</head>
<!--Navbar-->
<body>
<div class="container-fluid">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="addition.html" role="button" aria-haspopup="true" aria-expanded="false">Addition</a>
    <div class ="dropdown-menu">
    	<a class = "dropdown-item" href="addition.php">Basic</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="intaddition.php">Intermediate</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="advaddition.php">Advanced</a>
    </div>
  </li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="subtraction.html" role="button" aria-haspopup="true" aria-expanded="false">Subtraction</a>
    <div class ="dropdown-menu">
    	<a class = "dropdown-item" href="subtraction.php">Basic</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="intsubtraction.php">Intermediate</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="advsubtraction.php">Advanced</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="multiplication.html" role="button" aria-haspopup="true" aria-expanded="false">Multiplication</a>
    <div class ="dropdown-menu">
    	<a class = "dropdown-item" href="multiplication.php">Basic</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="intmultiplication.php">Intermediate</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item disabled" href="advmultiplication.php">Advanced</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="division.html" role="button" aria-haspopup="true" aria-expanded="false">Division</a>
    <div class ="dropdown-menu">
    	<a class = "dropdown-item" href="division.php">Basic</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="intdivision.php">Intermediate</a>
    	<div class = "dropdown-divider"></div>
    	<a class = "dropdown-item" href="advdivision.php">Advanced</a>
    </div>
  </li>
</ul>
</div>
<br/>
<br/>
	<!--Main Interaction Title-->
	<h1 style="text-align: center; color: #c24b4b;">Advanced Multiplication</h1> <br/>
	<!--Equation that appears on screen-->
	<h1 style="text-align: center;" id="numbers">
		<!--Displays equation on screen-->
		<script>
			document.write(num1 + " x " + num2);
		</script>
		<br/>
	</h1>
	
<br/>
<br/>

<!--Form bar and buttons-->

<div class="container-sm">
	<input autofocus="" class="form-control" style="text-align: center;" type="tel" id="answer" autocomplete="off";>
	<br/>
	<br/>
</div>
<div class="container-fluid">
	<div class="row">
	<div class="col text-center"><button id="submit" type ="button" class="btn btn-primary btn-lg" onclick="userAnswer();">Submit Answer</button></div></div><br/>
<div class="container-fluid">
<div class="row">
	<div class="col text-center"><button id="reset" type ="button" class="btn btn-primary btn-lg" onclick="nextCard();">Next Card</button></div></div>	
</div>	
	<br/>
<div class="container-fluid">
<div class="row">
	<div class="col text-center"><button id="solve" type ="button" class="btn btn-primary btn-lg" onclick="giveUp();">Give Up</button></div></div>	
</div>	
<br>
<br>
</body>

	<span><h3 style="text-align: center;"  
		id="output">		
	</h3></span>
	
<script>
		// Enables enter key functionality //
		$("#answer").keyup(function(event) {
			if (event.keyCode === 13) {
		$("#submit").click();
		}
		});

		// Calculates user entry against equation shown //
		function userAnswer() {
			var userAnswer = document.getElementById('answer').value;
			
			// Validates user entry //
	if (isNaN(userAnswer)) {output = userAnswer + " " + "is not a number, try again.";} else {
				// Validates correct answer //
				if (userAnswer == correctAnswer) {
					output = "Correct!";} 
				else {
					output = "Incorrect";}
			}
			
			// Removes focus from text field after answer is submitted //
			document.getElementById('answer').blur();

			// Displays result to screen //
			document.getElementById("output").innerHTML = output;

			}
		

			// Shows new card //
		function nextCard() {
			document.getElementById("output").innerHTML = "";
			document.getElementById("answer").focus();
			document.getElementById("answer").value = "";
	
			num1 = Math.floor((Math.random() * 100) + 1);
			num2 = Math.floor((Math.random() * 100) + 1);
			correctAnswer = num1 * num2;
			document.getElementById("numbers").innerHTML = (num1 + " x " + num2);
		}
			// Enables user to press 'n' key to show next card // 
		$(document).keyup(function(event) {
				if (event.keyCode === 78) {
			$("#reset").click();
	}
		});

			// Displays solution to equation // 

		function giveUp() {
			document.getElementById("output").innerHTML = ("Solution: " + num1 +
			" x " + num2 + " = " + correctAnswer);		
		}


	</script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<br><br/><br/><br/>
<br><br/><br/>
<div class="footer">
<p>&copy; Copyright 2020 John Griffin - All Rights Reserved</p>
</div>
</body>

</html>