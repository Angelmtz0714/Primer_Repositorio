<?php
/*Cbtis 89

Programa que almacena datos en un arreglo y posteriormente los imprime.
Angel Martinez Contreras 
3ªA Programacion Matutino */

$equipo = array( "portero "=>'Julio',"defensa"=>"Diego","medio"=>"Jair","delantero"=>"Rafa");

echo "** Seleccion nacional **","<br>","<br>";
foreach ($equipo as $posicion =>$jugador)
	{echo "el juador " . $jugador."es el ".$posicion;
	echo "<br>" ,"<br>";
	  }
	?>