<?php
/*CBTIS 89
P29ArrayNombres.php
programa que  
Angel Martinez Contreras 
3ªA Programacion Matutiono*/
$nombre = array("carlos","Mariana","Juan","Ana","Paola","Nahomi","Maria");

$Snombre = "Maria";

foreach ($nombre as $nombre){
	if ($nombre == $Snombre){
		echo "este nombre esta en array:",$Snombre,"<br>";
	}
}