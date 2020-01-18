function justRollDice(){
	//zerowanie zmiennych
	document.getElementById('Player1').innerText = "";
	document.getElementById('PC').innerText = "";
	document.getElementById('resultOfBetPlayer1').innerText = "";
	document.getElementById('resultOfBetPC').innerText = "";
	scorePlayer1 = 0;
	scorePC = 0;
	betOfPlayer1 = 0;
	betofPC = 0;
	
	//zrzucanie zmiennych z formularza gracza
	var FirstDicePlayerOne = document.getElementById("FirstDiceOfPlayerOne").value;
	var SecondDicePlayerOne = document.getElementById("SecondDiceOfPlayerOne").value;
	
	//losowanie rzutów kostką przez bota
	var FirstDiceBot = Math.floor(Math.random()*6)+1;
	var SecondDiceBot = Math.floor(Math.random()*6)+1; 
		
	//ustalanie zakładów
	var betOfPlayer1 = document.getElementById('betPlayer1').value;
	var betofPC = Math.floor(Math.random()*1000)+1;

	//wpisywanie na ekran wyników rzutów kostką u Bota wraz z zakładem
	document.getElementById('FirstDiceBot').innerText = FirstDiceBot;
	document.getElementById('SecondDiceBot').innerText = SecondDiceBot;
	document.getElementById('betPC').innerText = betofPC;

	//wpisanie sum wyrzuconych oczek
	var scorePlayer1 = parseInt(FirstDicePlayerOne) + parseInt(SecondDicePlayerOne);
	var scorePC = parseInt(FirstDiceBot) + parseInt(SecondDiceBot);
	
	if( scorePlayer1 > scorePC ){
		
		document.getElementById('Player1').innerText = "Wygrał";
		document.getElementById('PC').innerText = "Przegrał";
		
	}else if( scorePlayer1 < scorePC ){
		
		document.getElementById('Player1').innerText = "Przegrał";
		document.getElementById('PC').innerText = "Wygrał";
		
	}else{
		
		document.getElementById('Player1').innerText = "Remis";
		document.getElementById('PC').innerText = "Remis";
		
	}
	
	if( scorePlayer1 > scorePC ){
		
		document.getElementById('resultOfBetPlayer1').innerText = "Wygrał: "+ (parseInt(betOfPlayer1) + parseInt(betofPC))+" PLN";

	}else if( scorePlayer1 < scorePC ){
		
		document.getElementById('resultOfBetPC').innerText = "Wygrał: "+ (parseInt(betOfPlayer1)+parseInt(betofPC))+" PLN";
		
	}else{
		document.getElementById('resultOfBetPC').innerText = "Zwrot zakładu. Brak zwycięscy";
		document.getElementById('resultOfBetPlayer1').innerText = "Zwrot zakładu. Brak zwycięscy";

	}
}

function SimpleRollDice(){
	var FirstDice = Math.floor(Math.random()*6)+1;
	var SecondDice = Math.floor(Math.random()*6)+1;
	
	var Score = parseInt(FirstDice)+parseInt(SecondDice);
	
	document.getElementById('FirstDice').innerText = FirstDice;
	document.getElementById('SecondDice').innerText = SecondDice;
	document.getElementById('Score').innerText = Score;
}