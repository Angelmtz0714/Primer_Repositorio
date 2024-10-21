<?php

$nombres = array("Juan","Andre","Dante","Brayan","Gael","Maria");

sort($nombres);
echo "datos del arreglo ordenados de forma ascendente por medio de un ciclo for<br>";
for ($i =0; $i < count($nombres); $i++){
	echo $nombres[$i]."<br>";
}

array_push($nombres, "lula","marijose", "Miguel", "Victor");

array_splice($nombres, 1, 2);

rsort($nombres);
echo"<br> Datos del arreglo ordenados de forma descendente por medio de un ciclo for <br>";
for ($i = 0; $i< count($nombres );$i++){
	echo $nombres[$i] . "<br>";
}
 
echo "<br> El numero de elemntos actual en el arreglo es de: ". count($nombres);
?>