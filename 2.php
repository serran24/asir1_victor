<a>Víctor</a> 
</br> 


<p><a href="http://192.168.0.32/asir1_luis/Asir1.php"> Luis</a> <a><a>Víctor</a></a> <a href="http://192.168.0.68/asir176/Asir1.php"> alejandro</a> </p>


<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fwrite($f,date(' y-m-d H:i'));
fwrite($f,"\r\n");
fclose($f)
?>