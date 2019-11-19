<?php

function longitud($a,$b,$c){
	
   	 $n="Escaleno";
	 
	 if($a==$b or $b==$c or $c==$a)
	 $n="Isosceles";
 
	 if($a==$b and $b==$c)
	 $n="Equilatero";
	
return $n;

}

function angulos($a,$b,$c){
	
	 $n="Obtusangulo";
	
	 if($a==90 or $b==90 or $c==90)
	 $n="Rectangulo";
	
	 if($a<90 and $b<90 and $c<90)
	 $n="Acutangulo";
	
return $n;

}

function tipos($n) {
	
	return 
	 
	 longitud(
	
		$n['longitud'][0],
		
		$n['longitud'][1],
		
		$n['longitud'][2]
		
		).
		
	 angulos(
	 
		$n['angulos'][0],
		
		$n['angulos'][1],
		
		$n['angulos'][2]
		
		);
		
}

echo tipos($n);

?>