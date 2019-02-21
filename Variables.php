<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="">
<meta name="" content="">
<link rel="icon" href="">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="container">

		<?php

	    // Variable 
	    // Global scope
	    $txt = "Hello world!"; // String
	    $x = 5; // int
	    $y = 10.5; // double


	    echo "<br>";
	    echo $x; // print x

	    echo "<br><br>";

	    static $color = "red";

	    echo "My car is " . $color . "<br>";
	    echo "My house is " . $color . "<br>";
	    echo "My boat is " . $color . "<br>";


	    function myTest() {
	        // using x inside this function will generate an error
	    	echo "<p>Variable x inside function is: $x </p>";
	    	$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
	    	echo $INFO_Retained . "<br>";
	    } 

	    myTest();

	    echo $y;

	    echo "<p>Variable x outside function is: $x</p>";

	    $firstname = $_POST["firstName"];
	    $lastname = $_POST["lastName"];
	    echo "$firstname $lastname";

	    ?>
		
	</div>
</body>
</html>