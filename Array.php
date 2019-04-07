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

	<form method="GET" action="Array.php">
		<input type="text" name="name[]">
		<input type="text" name="name[]">
		<input type="text" name="name[]">
		<input type="submit" name="Q">
	</form>

	<?php 

	$name = $_GET['name'];

	foreach ($name as $value) {
		echo "$value" . "<br>";
	}
		
	echo "Einde. ";

	?>
		
</body>	

<footer>

</footer>

</html>