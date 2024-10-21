<?php
/* Cbtis 89 
P35Array16.php
Programa que almacena datos en dos arreglos posteriormente realiza operaciones entre ellos y coloca los resultados entre otros arreglos (suma,resta,multiplicacion, y division.), al final imprime el contenido de todos los arreglos.
Angel Martinez Contreras 
3ºA Programacion Matutiono */


$array1 = array(14,17,25,14,45);
$array2 = array(15,25,12,26,69);
$arraysuma = array();
$arrayresta= array();
$arraymulti= array();
$arraydivi= array();

$longitud = count($array1);


for($i = 0; $i< $longitud; $i++)
{
$arraysuma[$i]= $array1[$i]+$array2[$i];
$arrayresta[$i]= $array1[$i]-$array2[$i];
$arraymulti[$i]= $array1[$i]*$array2[$i];
$arraydivi[$i]= $array1[$i]/$array2[$i];
}

echo "SUMA ENTRE DOS Arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $array[$i]."+".$array2[$i]."=".$arraysuma[$i];
echo "<br>";
}
echo "<br>";

echo "Resta entres dos arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $array[$i]."-".$array2[$i]."=".$arrayresta[$i];
echo "<br>";
}
echo "<br>";

echo "Multiplicacion entre dos arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $array[$i]."x".$array2[$i]."=".$arraymulti[$i];
echo "<br>";
}
echo "<br>";

echo "Division entre dos Arreglos <br>";
for ($i=0; $i<$longitud; $i++)
	{echo $array[$i]."/".$array2[$i]."=".$arraydivi[$i];
echo "<br>";
}
echo "<br>";