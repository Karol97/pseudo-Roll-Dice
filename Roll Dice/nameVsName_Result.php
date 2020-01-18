<?php

	session_start();
	
	$betPlayer1 = $_SESSION['betPlayer1'];
	$betPlayer2 = $_POST['betPlayer2'];
	
	$FirstDiceOfPlayer1 = $_SESSION['FirstDiceOfPlayer1'];
	$SecondDiceOfPlayer1 = $_SESSION['SecondDiceOfPlayer1'];
	
	$FirstDiceOfPlayer2 = $_POST['FirstDiceOfPlayer2'];
	$SecondDiceOfPlayer2 = $_POST['SecondDiceOfPlayer2'];
	
	$ScoreOfPlayer1 = ($FirstDiceOfPlayer1+$SecondDiceOfPlayer1);
	$ScoreOfPlayer2 = ($FirstDiceOfPlayer2+$SecondDiceOfPlayer2);
	
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
		
		<div class="containerPlayer1">
			<h2 style="text-align: center"><?php echo $_SESSION['Player1']?></h2>
			<p><img class="foto" src="img/diceBlack.webp"></p>
			<h2 style="padding: 20px 0px;">Kostka 1: <?php echo $_SESSION['FirstDiceOfPlayer1']?></h2>
			<h2 style="padding: 20px 0px;">Kostka 2: <?php echo $_SESSION['SecondDiceOfPlayer1']?></h2>
			<h2 style="padding: 20px 0px;">Zakład: <?php echo $_SESSION['betPlayer1']."&nbspPLN"?></h2>
			
			<?php
				if( $ScoreOfPlayer1 > $ScoreOfPlayer2){
					echo '<h2 style="color:red">Wygrał: '.($betPlayer1+$betPlayer2).'&nbspPLN </h2>';
				}
				if( $ScoreOfPlayer1 == $ScoreOfPlayer2){
					echo '<h2 style="color:red; text-align: center">Remis. Nie ma wygranego</h2>';
					echo '<h2 style="color:red; text-align: center">Zwrócono '.$betPlayer1.'&nbspPLN</h2>';
				}
			?>
		
		</div>
		
		<div class="containerPCorPlayer2">
			<h2 style="text-align: center"><?php echo $_SESSION['Player2']?></h2>
			<p><img class="foto" src="img/dice.png"></p>
			<h2 style="padding: 20px 0px;">Kostka 1: <?php echo $_POST['FirstDiceOfPlayer2']?></h2>
			<h2 style="padding: 20px 0px;">Kostka 2: <?php echo $_POST['SecondDiceOfPlayer2']?></h2>
			<h2 style="padding: 20px 0px;">Zakład: <?php echo $_POST['betPlayer2']."&nbspPLN"?></h2>
			
			<?php
				if( $ScoreOfPlayer1 < $ScoreOfPlayer2){
					echo '<h2 style="color:red; text-align: center">Wygrał: '.($betPlayer1+$betPlayer2).'&nbspPLN </h2>';
				}
				
				if( $ScoreOfPlayer1 == $ScoreOfPlayer2){
					echo '<h2 style="color:red; text-align: center">Remis. Nie ma wygranego</h2>';
					echo '<h2 style="color:red; text-align: center">Zwrócono '.$betPlayer2.'&nbspPLN</h2>';
				}
			?>
		</div>
		
		<div class="containerPlay">
			<table align= "center">
				<tr>
					
					<td>
						<form method="POST" action="./nameVsname.php">
							<input type="submit" value="Zagraj jeszcze raz!">
						</form>
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
</html>	

<?php
	unset($ScoreOfPlayer1);
	unset($ScoreOfPlayer2);
?>