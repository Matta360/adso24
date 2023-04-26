<?php
//14.Solicitar al usuario una distancia en metros y transformar a km., cm. o mm. 
$metros = 36;
$mm = $metros * 1000;
$cm = $metros * 100;
$km = $metros / 1000;

echo "de",$metros, "metros a milimetros", $mm;
echo ("<br>");
echo "de",$metros, "metros a centimetros", $cm;
echo ("<br>");
echo "de",$metros, "metros a kilometross", $km;
echo ("<br>");
?>