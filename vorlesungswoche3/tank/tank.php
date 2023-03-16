<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung der Tankkosten</title>
</head>

<body>
	<?php
		// Dies ist ein Kommentar.
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen 
	
		$liter=60;
		$preis=1.53;
		// Optional mit Mehrwertsteuer bspw. 19 %
		$mwst=0.19;  
		$gesamt = $liter*$preis; // Berechnung und Speicherung in einer Variablen
		echo ($gesamt); //  Ausgabe
		echo "<br>"; // Ausgabe eines HTML-Elements für den Zeilenumbruch
		echo ($gesamt+($gesamt*$mwst)); // Ausgabe Gesamt plus MwST
		
	?>
</body>
</html>