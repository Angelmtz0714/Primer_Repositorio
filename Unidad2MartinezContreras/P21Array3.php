<?php
/* Cbtis 89
programa que almacena diversos datos en un arreglo y posteriormente los imprime por medio de un ciclo for
Angel Martinez Contreras
3ªA Programacion M.T */
$arraynombres = array("karina ", "Marco ", "Rocio ","Roberto","Fer","Juan");

//se obtiene el numero de elementos
$longuitud =count($arraynombres);

//Recorre todos los elementos 
for ($i =o; $i<$longuitud; $i++)
	{//se obtiene el valor de cada elemento
		echo $arraynombres[$i];
		echo "<br>";
	}
?>