<?php
/*Cbtis 89
Progama que guarda el arreglo de 5 articulos con descuento y muestra el descuento y el total sin el descuento y luego con el descuento.
Martinez Contreras Angel T.M.
Progrmacion 3ªA */

$arrayPrecios = array(500,400,200,700,100);
$arraySubtotal= count($arrayPrecios);
$arrayIva=array();
$arraySubtotal=array();
$arrayDescuentos=array();
$arrayTotal=array();

for($i=0; $i<5; $i++){
	$arrayIva[$i]=$arrayPrecios[$i]*0.16;
	$arraySubtotal=$arrayPrecios[$i]*$arrayIva[$i];
	$arrayDescuentos=$arraySubtotal[$i]*0.16;
	$arrayTotal=$arraySubtotal[$i]-$arrayDescuentos[$i];
}
echo"Arreglo Precios";
echo"<br>";
for($i=0; $i<5; $i++){
	echo $arrayPrecios[$i];
	echo"<br>";
}
echo"<br>";

echo"Arreglo Iva";
for($i=0; $i<5; $i++){
	
	echo $arrayIva[$i];
	echo "<br>";
}
echo"<br>";

echo"Arreglo subtotal";
for ($i=0; $i<5; $i++){
	
	echo $arraySubtotal[$i];
	echo "<br>";
}
echo"<br>";

echo "Arreglo Descuentos";
for ($i=0; $i<5; $i++){
	
	echo $arrayDescuentos[$i];
	echo"<br>";
}
echo"<br>";

echo "Arreglo Total";
for ($i=0; $i<5; $i++){
	
	echo $arrayTotal[$i];
	echo"<br>";
}




?>