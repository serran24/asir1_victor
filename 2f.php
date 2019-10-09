<?php

echo "<br>";
echo 'Este es el for:';
echo "<br/>";

$meses = array(
      
	  "Enero",
	  "Febrero",
	  "Marzo",
	  "Abril",
	  "Mayo",
	  "Junio",
	  "Julio",
	  "Agosto",
	  "Septiembre",
	  "Octubre",
	  "Noviembre",
	  "Diciembre",
	  
	  );
echo "<br>";
                                                          
for ($n = 0; $n <=11; $n++) {
    echo $meses[$n];
	echo "<br>";
}

echo "<br>";
echo 'Este es el foreach:';
echo "<br/>";

echo "<br>";

foreach($meses as $mes){
	echo $mes."<br/>";
}	

?>