<?php
//10.Programa que permita determinar el salario a pagar a un empleado, teniendo como entradas el salario diario y el número de días trabajados. Tenga en cuenta que al empleado se le debe descontar el 10% por concepto de pensión y 15% por concepto de salud.
$saldiario = 41.935;
$numdias = 23;
$salario = $saldiario * $numdias;
$porcentaje1 = $salario / 10;
$porcentaje2 = $salario / 15;

echo "el salario del empleado es:", $salario;
echo ("<br>");
echo "el 10% pension:",$porcentaje1;
echo ("<br>");
echo "el 15% salud:", $porcentaje2;
echo ("<br>");
?>