<table>
<tr>
	<td>Dia //</td>
	<td>Semana //</td>
	<td>Fecha //</td>
	<td>Dia semana </td>
</tr>



<?php
$r=[];
for($i=1;$i<289;$i++){
	$r[]=[
	'n'=>$i,
	's'=>round($i/7)+1,
	'Fecha'=>date('Y-m-d',strtotime('2019-09-11')+($i-1)*24*60*60),
	'D'=>date('D',strtotime('2019-09-11')+($i-1)*24*60*60),
	];
}
/*
echo '<pre>';
print_r($r);
echo '</pre>';
*/
foreach($r as $f){
	echo '<tr>';
	// Día año
	echo '<td>';
	echo $f['n'];
	echo '</td>';	
	// Día semana
	echo '<td>';
	echo $f['s'];
	echo '</td>';
	// Fecha
	echo '<td>';
	echo $f['Fecha'];
	echo '</td>';	
	// Día de la semana
	echo '<td>';
	echo $f['D'];
	echo '</td>';	
	
	echo '</tr>';
}
?>

</table>