<?php
  include('class.connessione.php');

	//istanzio l'oggetto Fattura e lo passo alla variabile $fatt
	$dati = new Connect();
	
	// definisco i valori da attribuire alle varie proprietà di cui si compone l'oggetto Connect
	$dati -> server = "localhost";
	$dati -> username = "root";
	$dati -> password = "root";
	$dati -> db = "nomeDatabase";
?>
