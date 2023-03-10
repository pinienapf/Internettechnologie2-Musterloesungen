<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Rechteckberechnung</title>
</head>

<body>
	<?php
		// Dies ist ein Kommentar.
		
		/* Ein mehrzeiliger Kommentar, 
		der wieder mit einen Sternchen gefolgt vom Schrägstrich geschlossen werden muss.
		*/
		// Definition der benötigten Variablen für die Gleichung 
	
		$hoehe=60;
		$breite=1.53;
		$umbruch="<br>";
		
		// Berechnung des Umfangs  
		$umfang = (2*$breite)+(2*$hoehe);
		// Ausgabe des Umfangs
		echo "Umfang: ".$umfang;
		echo $umbruch; // Zeilenumbruch, damit die Zahlen nicht hintereinander stehen
		
		// Berechnung der Fläche
		$flaeche = $breite*$hoehe;
		// Ausgabe der Fläche
		echo "Fläche: ".$flaeche;
		echo $umbruch; // Zeilenumbruch
	
		// Berechnung der Diagonalen
		$diagonale = sqrt(pow($breite,2)+pow($hoehe,2));
		// Ausgabe der Diagonalen
		echo "Diagonale: ".$diagonale;
		echo $umbruch; // Zeilenumbruch
	
	?>
</body>
</html>