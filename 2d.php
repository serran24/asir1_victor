﻿<?php
function calcula($a,$b){
	$r=null;
	$r=$r.($a + $b);
	$r=$r." es suma de $a + $b <br>";
	$r=$r.($a - $b);
	$r=$r." es resta de $a - $b <br>";
	$r=$r.($a * $b);
	$r=$r." es multiplicación de $a * $b <br>";
	if($b!=0){
		$r=$r.($a / $b);
		$r=$r." es división de $a / $b <br>";
	}
	$r=$r."<br>";
	return $r;
}
calcula(8,4);
$s=calcula(20,0);
echo $s;
?>