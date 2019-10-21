<?php

function Notas($n){
	
	$r='PENDIENTE';
	
	if($n>=5)
		$r= ' APROBADO';

	
	
	if($n>=7)
		$r= 'NOTABLE';


	
	if($n>=8.5)
		$r= 'SOBRESALIENTE';

	   
	return $r;
}

echo Notas(7);