<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="">
<meta name="" content="">
<link rel="icon" href="">
<link rel="stylesheet" type="text/css" href="style.css">

<body>
	<div class="center">
		<div class="oborder">
			<h1>Change Variables</h1>

			<form method="post" action="Variables.php">
				<input type="submit" name ="O" value="Blue" accesskey="b">
			</form>

			<form method="post" action="Variables.php">
				<input type="submit" name ="Q" value="Green" accesskey="g">
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

		    ?>
		</div>
	</div>
</body>

</html>