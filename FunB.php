<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="">
<meta name="" content="">
<link rel="icon" href="">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="container">

		<form method="post" action="FunB.php">
			<input type="submit" name ="Q" value="Press ALT + SHIFT + S!" accesskey="s">
		</form>

	</div>
	
	<?php

	if(isset($_POST['submit'])){

		$Pressed = $_POST["Q"];
		echo "$Pressed";
	}

	?>

</body>
</html>