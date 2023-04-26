<?php
//6.Programa que permita calcular el 30%, el 60% y el 90% de cualquier número.
$numero1 = 480;
$multiplicacion =30;
$dividicion = 100;
$porcentaje1 = $numero1 * $multiplicacion / $dividicion;

$multiplicacion =60;
$dividicion = 100;
$porcentaje2 = $numero1 * $multiplicacion / $dividicion;

$multiplicacion =90;
$dividicion = 100;
$porcentaje3 = $numero1 * $multiplicacion / $dividicion;

echo "el 30% de su valor es:", $porcentaje1;
echo ("<br>");
echo "el 60% de su valor es:", $porcentaje2;
echo ("<br>");
echo "el 90% de su valor es:", $porcentaje3;
echo ("<br>");
?>