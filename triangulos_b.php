<?php

function Angulos ($a,$b,$c) {
	
	$n="Acutangulo";
		
		if ($a==90 or $b==90 or $c==90)
				$n="Rectangulo";
			
		if ($a>90 or $b>90 or $c>90)
				$n="Obtusangulo";
			
return $n;
}

echo Angulos(150,60,30)."<br>";

echo Angulos(80,50,10)."<br>";

echo Angulos(60,60,60)."<br>";

echo Angulos(40,90,130)."<br>";

echo Angulos(80,90,20)."<br>";

?>