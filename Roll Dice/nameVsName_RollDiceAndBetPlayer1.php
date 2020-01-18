<?php

	session_start();
	
	if( empty($_POST['Player1']) || empty($_POST['Player2'])){
		$_SESSION['nieWpisaneImie2'] = "Proszę wpisać swój nick!";
		header('Location: nameVsName.php');
		exit();
	}
	
	if( $_POST['Player1'] == $_POST['Player2']){
		$_SESSION['teSameImiona'] = 'Występują takie same nicki! Proszę podać różne nicki!';
		unset($_POST['Player1']);
		unset($_POST['Player2']);
		header('Location: nameVsName.php');
		exit();
	}
	
	$_SESSION['Player1'] = $_POST['Player1'];
	
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
			<h2 style="text-align: center"><?php echo $_POST['Player1']?></h2>
			<p><img class="foto" src="img/diceBlack.webp"></p>
			<h2 style="text-align: center">Podaj swoje liczby:</h2> 
			
			<form method="post" action="nameVsName_RollDiceAndBetPlayer2.php">
				<h2>Kostka 1: <input type='number' min='1' max='6' name='FirstDiceOfPlayer1' value="1"></h2>
				<h2>Kostka 2: <input type='number' min='1' max='6' name='SecondDiceOfPlayer1' value="1"></h2>
				<h2>Zakład:	<input type='number' min='2' max='1000' name='betPlayer1' value="2"></h2>
				<input type="submit" value='Rzuć kostką'>
			</form>	
			
			<form method='POST' action='index.php'>
				<input type='submit' value="Wróć do menu głównego">
			</form>
			
			<?php
				if( isset($_SESSION['BrakKostek']) ){
					echo '<div class="error">'.$_SESSION['BrakKostek'].'</div>';
					unset($_SESSION['BrakKostek']);
				}
			?>
		</div>
	</body
</html>	