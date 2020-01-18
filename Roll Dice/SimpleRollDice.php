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
			<h1/>pseudo Gra w Kości
		</header>
		
		<div class="secondMenu">
			<h2 style="text-align: center">Zwykła kostka do gry</h2>
			<p><img class="fotoDoubleDice" src="./img/TwoDice.png"></p>
			<h2 style="padding: 15px 0px;">Kostka 1: <div class="SimpleDice" id="FirstDice"> </div></h2>
			<h2 style="padding: 15px 0px;">Kostka 2: <div class="SimpleDice" id="SecondDice"> </div></h2>
			<h2 style="padding: 15px 0px;">Suma Oczek: <div class="SimpleDice" id="Score"> </div></h2>
			
			<table align= "center">
				<tr>
				
					<td>
						<input type="button" value="Rzuć Kostką" onclick="SimpleRollDice()">
					</td>
					
					<td>
						<form method="POST" action="./index.php" >
							<input type="submit" value="Wróć do menu głównego">
						</form>	
					</td>
					
				</tr>
			</table>	
		</div>
	</body>
	<script src="./random.js"></script>
</html>