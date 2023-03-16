<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Berechnung von Übertragungszeiten V2</title>
</head>

<body>
	<?php
		$bandbreite = 50; // Einheit kBit/s
		$datenmenge = 500;	// Einheit in MB
		$bitproByte = 8;
		$mbProKb= 1000; // MB pro KB
		$byteProKbyte = 1000; // Byte pro KByte
		$bitProByte = 8; // 8 Bit pro Byte
		$bandbreiteNormiert=$bandbreite/1000; // Nur für die Anzeige im Ergebnistext
	
		// Berechnung der Menge an Daten in Bit
		$datenmengeInBit = $datenmenge*$mbProKb*$byteProKbyte*$bitProByte;
		// Berechnung der Übertragungszeit
		$uebertragungszeit = $datenmengeInBit / ($bandbreite*1000);
		// Ausgabe des Ergebnisses in Textform.
		echo "<p>Die Übertragungszeit von $datenmenge MB bei einer Bandbreite von $bandbreite kBit/s beträgt $uebertragungszeit Sekunden.</p>";
	
		$uebertragungsZeitInStunden = $uebertragungszeit/3600; // Zeit geteilt durch Sekunden pro Stunde
		echo"<p>Ergebnis in Stunden: $uebertragungsZeitInStunden</p>";
			
		
	
	?>
	
</body>
</html>