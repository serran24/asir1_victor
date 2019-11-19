<?php

function longitud($a,$b,$c){
	
     $n="escaleno";
	 
	 if ($a==$b or $b==$c)
     $n="isosceles";
 
	 if ($b==$c or $a==$c)
	 $n="equilatero";

	
return $n;

}

function angulo($a,$b,$c){
	
	 $n="Acutangulo";
     if ($a==90 or $b==90 or $c==90)
		 
	 $n="Rectangulo";
 	 if ($a>90 or $b>90 or $c>90)
		 
	 $n="Obtusangulo";
	
return $n;
	
}

function triangulo($a,$b,$c,$d,$e,$f){
	
return Angulo($a,$b,$c);

return longitud($d,$e,$f);
	
}

echo triangulo(110,40,30,6,2,3)."<br>";
echo triangulo(60,90,30,4,4,8)."<br>";
echo triangulo(60,60,60,2,2,2)."<br>";

?>