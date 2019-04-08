<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content=""> <!--Encoding die je pagina gebruikt-->
<meta name="keywords" content=""> <!--Encoding die je pagina gebruikt-->
<link rel="icon" href=""> <!--ICON van de pagina-->
<link rel="stylesheet" type="text/css" href=""> <!--Stylesheet die je gebruikt-->

<head>
	<title>0952042</title>
</head>

<body>


	<!-- HTML text -->
	<H1>Development Fundamentals Toets B I April 2019</H1>
	<br><hr>
	<H2>Studentnaam: Pryesh Briedjlal</H2>
	<H2>Studentnummer: 0952042</H2>
	<h3>Klas: BIM103</h3>
	<hr>
	<br><br>
	<H3>Bestellijst snacks voetbalkantine</H3>

	<!-- Start van Form -->
	<form method="GET" action="">
		<p>Vul hier uw aantal in</p>
			<label>Patat____</label>
			<input type="number" name="patat">
			<select name="Aantal">
	            <option name="saus[]">Zonder</option>
	            <option name="saus[]">Mayo</option>
	            <option name="saus[]">Pinda</option>
	            <option name="saus[]">Joppie</option>
	        </select>
		<br>
			<label>Kroket__:  </label>
			<input type="number" name="kroket">
		<br>
			<label>Frikandel:</label>
			<input type="number" name="frikandel">
		<br>
			<label>Tosti__-_:</label>
			<input type="number" name="tosti">
		<br><br>
			<label>Studentenkorting</label>
			<input type="radio" name="korting" value="met" checked> Ja
	        <input type="radio" name="korting" value="zonder"> Nee
        <br><br>
			<input type="submit" name ="bestel" value="Bestel" accesskey="g">
	</form>


	<?php


	/* Variable gedecraleerd */

	/* Aantal */
	$saus 		= $_GET["saus"];
	$patat 		= $_GET["patat]"];
	$kroket 	= $_GET["kroket"];
	$frikandel 	= $_GET["frikandel"];
	$tosti 		= $_GET["tosti"];
	$korting 	= $_GET["korting"];

	/* Prijs + in de toekomst makkelijk aan te passen */
	$prijs_patat 		= 1.20;
	$prijs_saus			= 0.30;
	$prijs_kroket		= 1.25;
	$prijs_frikandel 	= 1.25;
	$prijs_tosti 		= 1.00;



	/* Bereken Funtie */
	function calc($saus, $patat, $kroket, $frikandel, $tosti, $prijs_patat, $prijs_tosti, $prijs_frikandel, $prijs_kroket, $prijs_saus, $korting){


		/* Optelling */
		$totaal = round(($kroket * $prijs_kroket + $frikandel * $prijs_frikandel + $tosti * $prijs_tosti), 2);


		/* Aantal bestellingen */
		$aantal = $patat + $kroket + $frikandel + $tosti;

		/* Saus berekening */
		foreach ($saus as $prijs_patat) {
			$prijs_patat = $prijs_saus * $patat;
		}

		/* Studentenkorting berekening */
		if ($korting == "met") {
			$totaal = $totaal * 0.90;
		}
		
		/* Return de berekening */
		return "Aantal is " . $aantal .

		"<br> <br> Aantal patat is: " . $patat . 
		"<br>Aantal kroket is: " . $kroket .
		"<br>Aantal frikandel is: " . $frikandel .
		"<br>Aantal tosti is: " . $tosti .


		"<br> <br>" . "Eindbedrag is " . $totaal . " Euro " . $korting . " Studentenkorting.";
	}


	/* Output van Functie */
	echo "<br>";
	echo calc($saus, $patat, $kroket, $frikandel, $tosti, $prijs_patat, $prijs_tosti, $prijs_frikandel, $prijs_kroket, $prijs_saus, $korting);
	echo "<br>";
	 ?>
		
</body>	

<footer>

</footer>

</html>