<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="">
<meta name="keywords" content="">
<link rel="icon" href="">
<link rel="stylesheet" type="text/css" href="">

<head>
	<title></title>
</head>

<body>

	<form method="GET" action="BMI.php">
		<input type="number" name="gew" placeholder="Enter your weight">
		<input type="number" name="len" placeholder="Enter your lenght">
		<input type="submit" name ="S" value="submit" accesskey="g">
	</form>

	<?php

	$gew = $_GET["gew"];
    $len = $_GET["len"];

	function BMI($gew,$len) {

    	
    	$bmi = round($gew / (($len / 100)**2));
	   	return $bmi;
	   
	}

	echo "BMI : " . BMI($gew,$len);

	?>
		
</body>	

<footer>

</footer>

</html>