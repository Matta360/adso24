<?php 
//8.Solicitar tres números al usuario e imprimirlos en orden ascendente y descendente. 
echo "ingrese tres numeros";
$numero1 = readline("");
$numero2 = readline("");
$numero3 = readline("");

$ascendente = $numero1<$numero2<$numero3;
$center = $numero2<$numero3<$numero1;
$descendente = $numero3<$numero1<$numero2;

if ($ascendente) {
    echo "orden",$ascendente;
}if ($centar) {
    echo "orden", $centar;
}else {
    echo "orden", $descendente;
}
?>