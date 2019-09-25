<a>Víctor</a> 
</br> 
<a href="http://192.168.0.92/asir176/asir1.html"> alejandro</a>
<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)
?>