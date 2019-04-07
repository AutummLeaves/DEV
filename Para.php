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

	<form method="GET" action="">
		<input type="number" name="getal">
		<input type="number" name="keer">
		<input type="submit" name ="S" accesskey="g">
	</form>

	<?php 

	$getal = $_GET["getal"];
	$keer  = $_GET["keer"];


	function keer($getal, $keer){
		$X = $getal * $keer;
		echo "$getal X $keer = $X";
	}
	

	if(isset($_GET["S"])){
		keer($getal, $keer);
	}
	

	 ?>
		
</body>	

<footer>

</footer>

</html>