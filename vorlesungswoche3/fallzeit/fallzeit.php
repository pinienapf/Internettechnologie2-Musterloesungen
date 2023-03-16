<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung des freien Falls eines Handys</title>
</head>

<body>
	<h1>Berechnung des freies Falls eines Handys - Version 1</h1>
	
	<?php
		// Dies ist ein Kommentar.
	
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen
		$hoehe=15;
	    const fallbeschleunigung = 9.81; // Definition einer Konstanten. Es wird kein $-Zeichen vorangestellt.
		echo (sqrt((2*$hoehe)/(fallbeschleunigung))); // Berechnung und Ausgabe
		
	?>
</body>
</html>