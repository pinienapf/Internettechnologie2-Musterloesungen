<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ergebnis.php</title>
</head>

<body>
	<h1>Ergebnisseite</h1>
	<?php
		echo "Hallo, ".$_POST["vorname"]." ".$_POST["nachname"];
		// Formularinhalte entgegen nehmen
		$vorname=$_POST["vorname"];
		$zahl1 = doubleval($_POST["zahl1"]);
		$zahl2 = doubleval($_POST["zahl2"]);
		// Überprüfung, ob Zahl 1 kleiner Zahl 2 ist
		/* Vergleichsoperatoren
			== gleich
			!= ungleich
			< kleiner als
			> größer als
			<= kleiner oder gleich
			>= größer oder gleich
			
			
			Logische Operatoren
			Logische Oder ||
			Logische UND &&
		*/
	
	// Wenn Zahl 1 kleiner Zahl 2  und Vorname gleich Andreas ist
	
		 if(($zahl1<$zahl2)&&($vorname=="Andreas"))
	
		//if(($zahl1<$zahl2)&&($zahl1==5))
			{
				$ergebnis = $zahl1+$zahl2;
				echo "<br> Die Addition von $zahl1 und $zahl2 ergibt $ergebnis<br>";
			}else 
		 			{
						echo "<p>Zahl 1 muss kleiner Zahl 2 sein</p>";
					} 
					
	
	
		
	
	
		// Umwandlung von Zeichenketten in Zahlen
		// Expliziete Umwandlung
		echo "<br>";
		$a = 435;
		echo intval($a)."<br>";
		$b = "22.6";
		echo doubleval($b)."<br>";
		echo intval($b)."<br>";
	
	?>
</body>
</html>