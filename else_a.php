<?php

function Notas($n){
	
	if($n>=5)
		$r= 'APTO';
	else 
		$r= 'NO APTO';
	return $r;
}

echo Notas(8);
