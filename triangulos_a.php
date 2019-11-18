<?php
function longitud ($a, a$b, $c) {

   if($a==$b==$c){
   $r='Equilatero';
   }
	
	
   if($a==$b or $a==$c or $b==$a or $b==$c or $c==$a or $c==$b){
   $r='Isosceles';
   }
	
		
   if($a<>$b or $a<>$c or $b<>$a or $b<>$c or $c<>$a or $c<>$b){
   $r='Escaleno';
   }
	
   
return $r;
}	   

echo longitud (1,1,1)."<br>";