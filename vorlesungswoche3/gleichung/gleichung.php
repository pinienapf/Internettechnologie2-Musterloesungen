<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lineares Gleichungssystem</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
</head>

	<h1>Lineares Gleichungssystem V2</h1>
	
	<?php
		// Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Details siehe weiter unten.
		if(isset($_POST["gesendet"]))
		{
	
			$a=doubleval($_POST["a"]);
			$b=doubleval($_POST["b"]);
			$c=doubleval($_POST["c"]);
			$d=doubleval($_POST["d"]);
			$x=doubleval($_POST["x"]);
			
			$min=-5;
			$max=5;


			if($x>=$min && $x<=$max)
			{
				$y= ($a*pow($x,3)+$b*pow($x,2)+$c*$x+$d); 
				$ergebnis = "Die Gleichung liefert für x=$x y=$y";
				

			} else
			{
				$ergebnis ="Die Berechnung konnte nicht durchgeführt werden. Der zulässige Bereich  liegt zwischen $min und $max. Ihre Angabe war $x";
				
			}
		}
	?>
	
	
	
	
	<form action="gleichung.php" method="post">	
		<p>
			<label for="a">a</label>
			<input id="a" name="a"> 
			
			<label for="b">b</label>
			<input id="b" name="b"> 
			
			<label for="c">c</label>
			<input id="c" name="c"> 
			
			<label for="d">d</label>
			<input id="d" name="d"> 
			
			<label for="x">x</label>
			<input id="x" name="x"> 
		</p>
		
		<p><input type="submit" name="gesendet"</p>
	</form>
	
	<p>
		<?php 
				/* Das Ergebnis wird erst angezeigt wenn das Formular gesendet wurde. Ebenfalls die Berechnung (Siehe oben).
				Sonst wird die Berechnung ausgeführt, obwohl noch keine Menge erfasst oder eine Auswahl getroffen wurde.
				Dafür wird der Submit-Button mit einem Namen versehen "gesendet". Dieser kann jetzt mit isset abgefragt werden.
				*/
				if(isset($_POST["gesendet"]))
					{
						echo $ergebnis;
					}
		?>
	</p>
	
	<?php 
			// Einbinden einer php-Datei, die Code enthält, der sonst redundant wäre.
			include 'gleichungsTabelle_inc.php'; 
			include '../backLink_inc.php'; 
	?>
	
<body>
</body>
</html>