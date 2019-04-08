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

<header>
	<div>
		<img class="flower" src="https://i.imgur.com/WmmnLR1.png" alt="Header" width="100%" height="250px">        
	</div>
</header>

<body>


	<!-- HTML text -->
	<H1>Development Fundamentals Toets B I April 2019</H1>
	<hr>
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
	$patat 		= $_GET["patat"];
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
		$aantalArray = array($patat, $kroket, $frikandel, $tosti);

		/* Saus berekening */
		switch ($saus) {
			case $saus[1] OR $saus[2] OR $saus[3]:
				$totaal = $totaal + ($prijs_patat + $prijs_saus) * $patat;
				break;

			default:
				$totaal = $totaal + ($prijs_patat * $patat);
				break;
		}

		/* Studentenkorting berekening */
		if ($korting == "met") {
			$totaal = $totaal * 0.90;
		}


		/* value verwijst naar de waarde van de 
		    afzonderlijke elementen van de tabel  */
		foreach ($aantalArray as $value) {
			echo "$value <br>";
		} 
		 

		 echo "Einde.";

		
		/* Return de berekening */
		return "Aantal is " . $aantal ."<br> <br>".

		" Aantal patat is: " 			. $patat . 
		"<br>Aantal kroket is: " 		. $kroket .
		"<br>Aantal frikandel is: "		. $frikandel .
		"<br>Aantal tosti is: " 		. $tosti .

		/* Met Number Format maken we een euro die op 2 decmale getallen afgerond wordt */
		"<br> <br>" . "Eindbedrag is " . number_format((float)$totaal, 2,'.', '' ) . " Euro " . $korting . " Studentenkorting.";

	}


	/* Output van Functie */
	echo "<br>" . calc($saus, $patat, $kroket, $frikandel, $tosti, $prijs_patat, $prijs_tosti, $prijs_frikandel, $prijs_kroket, $prijs_saus, $korting) . "<br>";
	 ?>
		
</body>	

<footer>

</footer>

</html>