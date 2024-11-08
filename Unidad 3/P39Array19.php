<?php
/*CBTIS 89
P39Array19.php
programa que almacena informacion de 6 personas y dependiendo de su edad los contabiliza en diversos arreglos de acuerdo alas siguientes condiciones: Si la persona es menor de 18 años se debe colocar un 1 en el arreglo $grupo1 y en los otros dos colocar 0. si la persona tiene entre 18 y 49 años se debe colocar un 1 en elarreglo 2 $grupo2 y en los otros dos colocar 0. Si la persona tiene 50 años o mas se debe colocar un 1 en el arreglo $grupo3, y en los otros dos 0.
Angel MArtinez Contreras
3°A Programacion Matutino */

$Nombre =array("Paco","Mari","Lalo","Rosi","Paty","Beto");
$Edad =array (17,30,71,38,12,58);
$Grupo1= array();
$Grupo2= array();
$Grupo3= array();


for ($i = 0; $i < 6; $i++) {
    if ($Edad[$i] < 18) {
        $Grupo1[$i] = 1;
        $Grupo2[$i] = 0;
        $Grupo3[$i] = 0;
    }
    if ($Edad[$i] >= 18 && $Edad[$i] <= 49) {
        $Grupo1[$i] = 0;
        $Grupo2[$i] = 1;
        $Grupo3[$i] = 0;
    }
    if ($Edad[$i] >= 50) {
        $Grupo1[$i] = 0;
        $Grupo2[$i] = 0;
        $Grupo3[$i] = 1;
    }
}

// Mostrar resultados en formato simple
echo "Nombre -        Edad       -     Grupo1     -      Grupo2   -   Grupo3<br>  ";
for ($i = 0; $i < 6; $i++) {
    echo $Nombre[$i] . "   ------   " .   $Edad[$i]   . "  -------   " .  $Grupo1[$i]  . "    --------   " .  $Grupo2[$i]  . "   ---------   " .  $Grupo3[$i]  .  "<br>" ; 
}
?>