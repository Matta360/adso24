<?php 
//3.Solicitar número al usuario y determinar si es negativo, positivo o cero.
$numero = readline ("ingrese un numero");

if ($numero >0) {
    echo $numero, "es positivo";
}elseif ($numero <0) {
    echo $numero, "es negativo";
}
?>