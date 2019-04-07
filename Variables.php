<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="">
<meta name="" content="">
<link rel="icon" href="">
<link rel="stylesheet" type="text/css" href="style.css">

<header>
	<div>
		<img class="flower" src="https://i.imgur.com/WmmnLR1.png" alt="Header" width="100%" height="250px">        
	</div>
</header>

<body class="page">
	<div class="container">
		<div class="oborder">
			<h1>Change Variables</h1>

			<form method="post" action="Variables.php">
				<input type="submit" name ="O" value="Blue" accesskey="b">
			</form>

			<form method="post" action="Variables.php">
				<input type="submit" name ="Q" value="Green" accesskey="g">
			</form>

			<br>


			<form method="GET" action="Variables.php">
				<input type="text" name="gew" placeholder="Enter your weight">
				<input type="text" name="len" placeholder="Enter your lenght">
				<input type="submit" name ="S" value="Green" accesskey="g">
			</form>

			<?php

		    // Variable 
		    // Global scope
		    $txt = "Hello world!"; // String
		    $x = 5; // int
		    $y = 10.5; // double

		    echo "<br>";
		    echo $x; // print x

		    echo "<br><br>";


		    $color = "red";

		    define("blue", $GLOBALS['color'] = "blue");
		    define("green", $GLOBALS['color'] = "green");
		    
		    if(isset($_POST['O'])){

		    	echo $GLOBALS['color'].blue;

		    } elseif(isset($_POST['Q'])){

		    	echo $GLOBALS['color'].green;

		    } else {

		    	return;
		    }

		    echo "<br>";

		    echo "My car is " 	. $color . "<br>";
		    echo "My house is " . $color . "<br>";
		    echo "My boat is " 	. $color . "<br>";



		    function myTest() {
		        // using x inside this function will generate an error
		    	echo "<p>Variable x inside function is: $x </p>";
		    	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		    } 

		    myTest();

		    echo $y;

		    echo "<p>Variable x outside function is: $x</p>";


		    function switchCase(){

		    	$value = red;

		    	switch ($value) {
		    		case 'red':
		    			# code...
		    			break;
		    		case 'green':
		    			# code...
		    			break;
		    		case 'yellow':
		    			# code...
		    			break;
		    		case 'black':
		    			# code...
		    			break;

		    		default:
		    			# code...
		    			break;
		    	}

		    switchCase();

		    echo "Lengte: " . $lengte . "en   gewicht: " . $gewicht;





		    function BMI($gew,$len) {

		    	$gew = $_GET["gew"];
            	$len = $_GET["len"];
            	
            	$bmi = $gew / (($len / 100)**2);
			   	return $bmi;
			   

			}


			echo $bmi


		    }

		    ?>
		</div>
	</div>
</body>

</html>