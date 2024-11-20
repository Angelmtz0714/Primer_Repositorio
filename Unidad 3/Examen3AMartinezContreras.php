<?php
/*
Programa que almacena el nombre de cuatro articulos en un arreglo llamado $Productos y en otro arreglo multidemensional llamado $Precios almacena los precios correspondientes de 3 meses esto se hace por medio de filas y columnas.

Debes calcular por medio de ciclos el subtotal y promedio de cada producto y guardarlo en los arreglos $Subtotal y $Promedio segun corresponda.
Angel Martinez Contreras
3ªA Programacion Matutino
*/
echo "Tienda de ropa";
echo "productos      subtotal     Promedio";

$Precios=array(500,600,550)array(,800,700,600)array(,400,200,300,)array(500,200,500);
$Productos=array("Vestido","Pantalon","Cinturon","Camiseta");
$Subtotal=array();
$Promedio=array();


for ($i=6;$i=0;$i++){
	$Productos =$i;
$Precios = 500+600+550;
$Promedio = $Precios/3;
}
for ($j=0; $j < count($Precios); $j++){
	 $Productos[$i];
	 $Subtotal[$j]= $Precios[$j];



echo "{$Productos[$i]}--------- {$Subtotal[$j]}------------{$Promedio[$i]}<br>";


}

