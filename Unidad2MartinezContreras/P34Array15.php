<?php
/* Cbtis 89 
P34Array15.php
Programa que convierte los datos de un arreglo en una cadena de texto y forma contraria es decir convierte una cadena de texto a elementos dentro de un arrreglo.
Angel Martinez Contreras
3ºA Programacion Matutiono */

//Almacena datos en un arreglo 
$arraydatos = ["Angel","Martinez","Contreras"];    

//Convierte un array en una cadena de texto 
$string = implode("",$arraydatos);
echo "cadena de texto <br>";
echo $string;
echo "<br>","<br>";

//Cadena de texto a separar 
$cadena = "Tercero de programacion matutino";

//Convierte una cadena de texto a un array
$array = explode(" ", $cadena);

$longitud = count($array);
echo"<br>";
echo "Arreglo con datos de tipo string <br>";
//Imprime los elemntos del arreglo
for ($i = 0; $i<$longitud; $i++)
	{//se obtiene el valor de cada elemento 
		echo $array[$i];
		echo "<br>";
	}
	?>
