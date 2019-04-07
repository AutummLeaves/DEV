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

	<form method="GET" action="Control.php">
		<input type="text" name="naam">
		<input type="submit" name ="S" accesskey="g">
	</form>




	<?php

	$naam_fout = "";
	$naam = "";

	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	   $naam = $_GET["naam"];

	   if ($naam == "") {       
	      $naam_fout = "Naam is verplicht";
	   } else {

	      if (!preg_match("/^[a-zA-Z ]*$/",$naam)) {
	      	$naam_fout = "Alleen letters en spaties";
	      }
	   }
	}

	echo $naam;


	$lengte = 164;
	
	if (is_numeric($lengte)) {
	     echo "het is een getal.";
	} else {
	     echo "het is niet numeriek";
	}




	?>
		
</body>	

<footer>

</footer>

</html>