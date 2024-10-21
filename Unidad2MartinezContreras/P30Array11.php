<?php
/* CBTIS89
Programa que dise los numeros pares
Martinez Contreras Angel
3°A Matutino
*/

$productos = array("Camisa"=>250,"Pantalon"=>300,"Cinturon"=>100,"Gorra"=>400,"Calcetines"=>50);

echo "Array original";
print_r($productos);
echo "<br>";

sort($productos);
var_export($productos);
echo "<br>";

rsort($productos);
var_export($productos);
echo "<br>";
?>