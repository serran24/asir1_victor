<p><b>Triangulos:</b></p>

<?php

function longitud ($a1,$b1,$c1) {
	
	$r="Escaleno";
	
	if ($a1==$b1 or $b1==$c1)
		$r="Isosceles";
	
	if ($b1==$c1 or $a1==$c1)
		$r="Equilatero";
	
	return $r;
	
}

function Angulos ($a,$b,$c) {
	
		$r="Acutangulo";
		
			if ($a==90 or $b==90 or $c==90)
				$r="Rectangulo";
			
			if ($a>90 or $b>90 or $c>90)
				$r="Obtusangulo";
			
			return $r;
}

$n= [

	'lados'=>[2,3,1],
	
	'angulos'=>[85,20,30],
	
	];
	
$n= [

	'lados'=>[2,3,1.4],
	
	'angulos'=>[70,55,10],
	
	];
	
function Tipos ($n){
	
	 return 
	
	     longitud(
		 
		 $n['lados'][0],
		 
		 $n['lados'][1],
		 
		 $n['lados'][2])
		 
        .''.
		
		 Angulos(
		 
		 $n['angulos'][0],
		 
		 $n['angulos'][1],
		 
		 $n['angulos'][2]);
		 
}

echo Tipos($n);

?>