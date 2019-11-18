<?php

function meses($n){
	
	$a=[
	
	     ['Mes'=>'Enero',
	      'Dias'=>'31',
	      'Estacion'=>'Invierno'],
	 
	     ['Mes'=>'Febrero',
	      'Dias'=>'28/29',
	      'Estacion'=>'Invierno'],
	 
	     ['Mes'=>'Marzo',
	      'Dias'=>'31',
	      'Estacion'=>'Primavera'],
	 
	     ['Mes'=>'Abril',
	      'Dias'=>'30',
	      'Estacion'=>'Primavera'],
	 
	     ['Mes'=>'Mayo',
	      'Dias'=>'31',
	      'Estacion'=>'Primavera'],
	 
	     ['Mes'=>'Junio',
	      'Dias'=>'31',
	      'Estacion'=>'Verano'],
	 
	     ['Mes'=>'Julio',
	      'Dia'=>'30',
	      'Estacion'=>'Verano'],
	 
	     ['Mes'=>'Agosto',
	      'Dias'=>'31',
	      'Estacion'=>'Verano'],
	 
	     ['Mes'=>'Septiembre',
	      'Dias'=>'30',
	      'Estacion'=>'Verano'],
	 
	     ['Mes'=>'Octubre',
	      'Dias'=>'31',
	      'Estacion'=>'Otoño'],
	 
	     ['Mes'=>'Noviembre',
	      'Dias'=>'30',
	      'Estacion'=>'Otoño'],
	 
	     ['Mes'=>'Diciembre',
	      'Dias'=>'31',
	      'Estacion'=>'Invierno'],
	 
	
];

     $r=null;
	 
	 
     $r=$r.$a[$n-1]['Mes']."<br>";
	 
     $r=$r.$a[$n-1]['Dia']."<br>";
	 
     $r=$r.$a[$n-1]['Estacion']."<br>";
	 

     return $r;
	
}

echo meses(2)."<br>";

echo meses(4)."<br>";

echo meses(8)."<br>"

echo meses(10)."<br>";


?>
