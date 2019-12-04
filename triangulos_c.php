<?php

function angulo($a,$b,$c){
	
	$r="Triangulo Acutangulo";
	
	if ($a==90 or $b==90 or $c==90)
		
		$r="Triangulo Rectangulo";
		
		if ($a>90 or $b>90 or $c>90)
				$r="Triangulo Obtusangulo";
			
			return $r;
			
}

function longitud($d,$e,$f){
		
    $r="triangulo Escaleno";
	
	if ($d==$e || $e==$f)
		$r="triangulo Isosceles";
	
	if ($e==$f and $d==$f)
		$r="Triangulo Equilatero";
	
	return $r;
	
	
	
}

function triangulo($a,$b,$c,$d,$e,$f){
	
	return Angulo($a,$b,$c).' y '.longitud($d,$e,$f);
	
}

echo triangulo(110,40,30,6,2,3).'    - El triangulo va a ser Triangulo Obtusangulo y Escaleno'."<br>"."<br>";
echo triangulo(95,40,45,6,3,3).'    - El triangulo va a ser Triangulo Obtusangulo y Isosceles'."<br>"."<br>";
echo triangulo(60,90,30,4,4,8).'    - El triangulo va a ser Triangulo Rectangulo y Isosceles '."<br>"."<br>";
echo triangulo(60,90,30,4,2,8).'    - El triangulo va a ser Triangulo Rectangulo y Escaleno '."<br>"."<br>";
echo triangulo(60,60,60,2,2,2).'    - El triangulo va a ser Triangulo  Acutangulo y Equilatero'."<br>"."<br>";
echo triangulo(70,60,50,2,5,2).'    - El triangulo va a ser Triangulo  Acutangulo y Escaleno'."<br>"."<br>";
echo triangulo(80,70,60,2,1,1).'    - El triangulo va a ser Triangulo  Acutangulo y Isosceles'."<br>"."<br>";

?>