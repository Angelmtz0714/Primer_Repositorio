<?php
/*CBTIS 89
P27Array7.php
programa que  
Angel Martinez Contreras 
3ªA Programacion Matutiono*/

$numeros = range(1,100);
for($i= 0;$i< count($numeros);$i++){
	if($numeros[$i]% 2 == 0)
	{
		echo $numeros[$i]."<br>";
	}
}
?>