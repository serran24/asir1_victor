<?php

function meses($n){
	
	$a=[
	
	
	['Mes'=>'Enero',
	 'Dia'=>'31',
	 'Estacion'=>'Invierno'],
	 
	 ['Mes'=>'Febrero',
	 'Dia'=>'29',
	 'Estacion'=>'Invierno'],
	 
	 ['Mes'=>'Marzo',
	 'Dia'=>'30',
	 'Estacion'=>'Primavera'],
	 
	 ['Mes'=>'Abril',
	 'Dia'=>'31',
	 'Estacion'=>'Primavera'],
	 
	 ['Mes'=>'Mayo',
	 'Dia'=>'30',
	 'Estacion'=>'Primavera'],
	 
	 ['Mes'=>'Junio',
	 'Dia'=>'31',
	 'Estacion'=>'Verano'],
	 
	 ['Mes'=>'Julio',
	 'Dia'=>'30',
	 'Estacion'=>'Verano'],
	 
	 ['Mes'=>'Agosto',
	 'Dia'=>'31',
	 'Estacion'=>'Verano'],
	 
	 ['Mes'=>'Septiembre',
	 'Dia'=>'30',
	 'Estacion'=>'Otoño'],
	 
	 ['Mes'=>'Octubre',
	 'Dia'=>'31',
	 'Estacion'=>'Otoño'],
	 
	 ['Mes'=>'Noviembre',
	 'Dia'=>'30',
	 'Estacion'=>'Otoño'],
	 
	 ['Mes'=>'Diciembre',
	 'Dia'=>'31',
	 'Estacion'=>'Invierno'],
	 
	
];

$r=null;

$r=$r.$a[$n-1]['Mes']."<br>";
$r=$r.$a[$n-1]['Dia']."<br>";
$r=$r.$a[$n-1]['Estacion']."<br>";

return $r;
	
}

echo meses(10)."<br>";
echo meses(2)."<br>";