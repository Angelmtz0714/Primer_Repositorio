<?php 
/* CBTIS89
Sistema de cadenas 
MArtinez Contreras Angel 
3°A de Programacion Matutino
*/

$Cheque=1062;


$BM= floor($Cheque/1000);
$Cheque= $Cheque%1000;
$BQ= floor($Cheque/500);
$Cheque= $Cheque%500;
$BD= floor($Cheque/200);
$Cheque= $Cheque%200;
$BC= floor($Cheque/100);
$Cheque= $Cheque%100;
$BS= floor($Cheque/50);
$Cheque= $Cheque%50;
$BB= floor($Cheque/20);
$Cheque= $Cheque%20;
$MD= floor($Cheque/10);
$Cheque= $Cheque%10;
$MC= floor($Cheque/5);
$Cheque= $Cheque%5;
$MDO= floor($Cheque/2);
$Cheque= $Cheque%2;
$MP= floor($Cheque/1);

echo "Los billetes de mil son ", $BM;
echo "<br>";
echo "Los billetes de quinientos son ", $BQ;
echo "<br>";
echo "Los billetes de dosientos son ", $BD;
echo "<br>";
echo "Los billetes de sien son ", $BC;
echo "<br>";
echo "Los billetes de cincuenta son ", $BS;
echo "<br>";
echo "Los billetes de beinte son ", $BB;
echo "<br>";
echo "Las monedas de diez son ", $MD;
echo "<br>";
echo "Las monedas de cinco son ", $MC;
echo "<br>";
echo "Las monedas de dos son ", $MDO;
echo "<br>";
echo "Las monedas de a peso son ", $MP;
echo "<br>";
?>