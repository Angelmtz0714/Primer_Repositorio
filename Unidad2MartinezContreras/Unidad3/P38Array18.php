<?php
/*P38Array18.php
Programa que almacena datos en un arreglo multidimencional y posteriormente los imprime en diferentes posiciones.
Martinez Contreras Angel 
Programacion 3ªA turno matutino 
*/

$datos= array(
array(10, 20, 30),array(40 ,50 , 60),array(70 ,80 ,90));

echo "normal";
echo"<br>";

for($i=0;$i<3;$i++)
	{for ($j=0;$j<3;$j++)
		{echo  $datos [$i][$j]." ";
		}

		echo"<br>";
	}


echo"Fila Columnas";
echo"<br>";
for($i=0;$i<3;$i++)
	{for ($j=0;$j<3;$j++)
		{echo  $datos [$j][$i]." ";
		}

		echo"<br>";
	}



echo"Columnas inversas";
echo"<br>";
for($j=2;$i>=0;$i--)
	{for ($i=0;$i<3;$i++)
		{echo  $datos [$i][$j]." ";
		}

		echo"<br>";
	}
	

echo"Filas Inversas";
echo"<br>";
for($i=2;$i>=0;$i--)
	{for ($j=0;$j < 3; $j++)
		{echo  $datos [$i][$j]." ";
		}

		echo"<br>";
	}