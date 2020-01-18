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
		<h1>Gra Hazardowa - pseudo Gra w Kości</h1>
		
		<div class='secondMenu'>
			
			<form method="post" action="nameVsName_RollDiceAndBetPlayer1.php">
				<h2>Gracz 1: Podaj swój nick: <input type="text" name="Player1"></h2>
				<h2>Gracz 2: Podaj swój nick: <input type="text" name="Player2"></h2>
				<input type='submit' value="Przejdź do gry">
			</form>
			
			<form method='POST' action='index.php'>
				<input type='submit' value="Wróć do menu głównego">
			</form>
			
			<?php
				if( isset($_SESSION['nieWpisaneImie2']) ){
					echo '<div class="error">'.$_SESSION['nieWpisaneImie2'].'</div>';
					unset($_SESSION['nieWpisaneImie2']);
				}
				
				if( isset($_SESSION['teSameImiona']) ){
					echo '<div class="error">'.$_SESSION['teSameImiona'].'</div>';
					unset($_SESSION['teSameImiona']);
				}
			?>
	</body
</html>	