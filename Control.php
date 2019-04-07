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
	
	<?php 

	$naam_fout = "";
	$naam = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	   $naam = $_POST["naam"];
	   if ($naam == "") {       
	      $naam_fout = "Naam is verplicht";
	   } else {
	      if (!preg_match("/^[a-zA-Z ]*$/",$naam)) {    $naam_fout = "Alleen letters en spaties";     }
	   }
	}


	?>
		
</body>	

<footer>

</footer>

</html>