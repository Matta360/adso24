<?php 
//4.Solicitar dos números al usuario y calcular cuál es el mayor y cuál el menor, e imprimir el resultado.
$numero1 = readline("ingrese un numero");
$numero2 = readline("ingrese un numero");

if ($numero1 >= $numero2) {
    echo $numero1, "es mayor", $numero2, "es menor";
}else {
    echo $numero2, "es mayor",$numero1, "es menor";
}
?>