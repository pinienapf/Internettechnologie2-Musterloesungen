<?php
	function calcFunctionSin($x)
	{
		$ergebnis = sin($x);
		return round($ergebnis,5);
	}
	function calcFunctionCos($x)
	{
		$ergebnis = cos($x);
		return round($ergebnis,5);
	}

	function runden($wert, $genauigkeit)
	{
		return round($wert,$genauigkeit);
	}


?>