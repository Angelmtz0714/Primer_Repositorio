<?php
/*CBTIS 89
P20Array.php
programa que almacena diversos datos en un arreglo y posteriormente los imprime por arreglo y posteriormente losm imprime por medio de un ciclo for 
Angel Martinez Contreras 
3ªA Programacion Matutiono*/
$nombre = "Angel";
$array = array(1, 2, 3, "casa" , $nombre);

// Se obtiene el numero de elementos
$longitud = count($array);

//Recorre todos los elementos
for($i=0; $i<$longitud; $i++)
{//se obtiene el valor de cada elemento
echo $array[$i];
echo "<br>";
}
?> 