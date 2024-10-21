<?php
/*CBTIS 89
P23Array.php
programa que  
Angel Martinez Contreras 
3ªA Programacion Matutiono*/
$Frutas = array( "Manzana "=>'45',"pera"=>"25","melon"=>"35","sandia"=>"22");

echo "** Fruteria don chuy **","<br>","<br>";
foreach ($Frutas as $precio =>$kg)
	{echo "el precio de la fruta es ". $kg . " por kg de " . $precio;
	echo "<br>" ,"<br>";
}
?>