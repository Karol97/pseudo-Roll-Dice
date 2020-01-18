<?php

	session_start();

?>

<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>pseudo Gra w Kości</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
		<link rel="icon" type="image/png" href="./img/icon.png" sizes="16x16" />
	</head>
	
	<body>
		<header>
			<h1/>Witaj w naszej grze Hazardowej
			<h1/>pseudo Gra w Kości
		</header>
		
		<div class="menu">
			<form method="POST" action="./nameVsBot.php">
				<input type="submit" value="Gracz vs Komputer">
			</form>
			
			<form method="POST" action="./nameVsName.php">
				<input type="submit" value="Gracz vs Gracz">
			</form>
			
			<form method="POST" action="./SimpleRollDice.php">
				<input type="submit" value="Zwykła Kostka">
			</form>
			

		</div>
		
		
	</body>
</html>