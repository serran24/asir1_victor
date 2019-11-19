<?php

function longitud ($a,$b,$c){
    
     $n="escaleno";

     if ($a==$b or $a==$c or $b==$c){
	 $n="isosceles";
	
     if ($b==$c or $a==$c)
	 $n="equilatero";
 
    
	 }
		
     return $n;

}

echo longitud(1,1,1)."<br>";

echo longitud(2,1,3)."<br>";

echo longitud(1,3,2)."<br>";

echo longitud(4,4,2)."<br>";

echo longitud(3,3,3)."<br>";

echo longitud(2,4,3)."<br>";

?>