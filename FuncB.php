<!DOCTYPE html>
<html lang="en-US"> <!--Taal waarin de pagina wordt weergeven-->
<meta charset="UTF-8" > <!--Encoding die je pagina gebruikt-->
<meta name=description content="">
<meta name="" content="">
<link rel="icon" href="">
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<div class="container">
		<div class="center">

			<form method="post" action="FuncB.php">
				<input type="submit" name ="O" value="Press to Turn On!" accesskey="s">
			</form>

			<form method="post" action="FuncB.php">
				<input type="submit" name ="Q" value="Press to Shut Down!" accesskey="s">
			</form>

			<?php

			define("on", "On");
			define("off", "Off");

			if(isset($_POST['O'])){

				echo "Button is ".on;

			}

			if(isset($_POST['Q'])){

				echo "Button is ".off;

			}

			



			?>
		</div>
	</div>

	
</body>
</html>