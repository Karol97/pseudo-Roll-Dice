<?php

	session_start();
	
	if( empty($_POST['name']) ){
		$_SESSION['nieWpisaneImie'] = "Proszę wpisać swój nick!";
		header('Location: nameVsBot.php');
		exit();
	}
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
				<h1/>Gra Hazardowa - pseudo Gra w Kości				
			</header>
			
			<main>
				<article>
			
						<div class="containerPlayer1">
							<h2 style="text-align: center"><?php echo $_POST['name'] ?></h2>
							<p><img class="foto" src="img/diceBlack.webp"></p>
							<h2/>Podaj swoje liczby: 
							
							<h2>Kostka 1: <input type='number' min='1' max='6' id='FirstDiceOfPlayerOne'></h2>
							<h2>Kostka 2: <input type='number' min='1' max='6' id='SecondDiceOfPlayerOne'></h2>
							<h2>Zakład:	<input type='number' min='1' max='1000' id='betPlayer1'></h2>				
							<h2>Wynik: <div class="bot" id="Player1"> </div></h2>
							<h2 style="padding: 15px 0px; "><div class="bot" id="resultOfBetPlayer1"> </div></h2>
						</div>
						
						
						<div class="containerPCorPlayer2">
							<h2 style=" text-align: center ">Komputer</h2>
							<p><img class="foto" src="img/dice.png"></p>
							<h2>Podaj swoje liczby:</h2>
							
							<h2 style="padding: 15px 0px;">Kostka 1: <div class="bot" id="FirstDiceBot"> </div></h2>
							
							
							<h2 style="padding: 15px 0px; ">Kostka 2: <div class="bot" id="SecondDiceBot"> </div></h2>
							
							
							<h2 style="padding: 15px 0px; ">Zakład: <div class="bot" id="betPC"> </div></h2>
							
							
							<h2 style="padding: 15px 0px; ">Wynik: <div class="bot" id="PC"> </div></h2>
							
							
							<h2><div class="bot" id="resultOfBetPC"></div></h2>
						</div>
						
						
						<div class="containerPlay">
							<table align= "center">
								<tr>
								
									<td>
										<input type="button" value="Rzuć Kostką" onclick="justRollDice()">
									</td>
									
									<td>
										<form method="POST" action="./index.php" >
											<input type="submit" value="Wróć do menu głównego">
										</form>	
									</td>
									
								</tr>
							</table>	
						</div>
						
						
				</article>	
			</main>
	</body>
	<script src="./random.js"></script>
</html>