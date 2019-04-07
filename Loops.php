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


	function while(){
		$x = 0;
		$y = 11;
		// we beginnen bij nul en tellen tot 11
		echo "Begin : <br>";
		While ($x <= $y){
			echo "Het getal is : $x <br>";
			$x++;
		}
		echo "Einde. ";

	}


	function do(){
		// we beginnen deze keer bij 7
		$x = 7;
		echo "Begin: <br>";
		do {
			echo "Het getal is: $x <br>";
			$x++;
		} while ($x <= 12);
		echo "Einde.";

	}

	function for(){
		echo "Begin:";
		/* In het statement wordt de "besturing" geregeld */
		for ($x = 0; $x <= 10; $x++) {
			echo "Het getal is: $x <br>";
		} 
		  echo "Einde.";

	}


	function foreach(){
		$autos = array("BMW", "VW", "Audi", "Mercedes", "Opel");
		 echo "Bekende Duitse automerken: <br>";
		/* value verwijst naar de waarde van de 
		    afzonderlijke elementen van de tabel  */
		foreach ($autos as $value) {
			echo "$value <br>";
		} 
		  echo "Einde.";
	}
	




	 ?>
		
</body>	

<footer>

</footer>

</html>