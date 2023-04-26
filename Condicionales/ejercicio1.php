<?php
//1.Solicitar número al usuario y determinar si es par, impar o es cero. 

$numero = readline("ingrese un numero");

switch ($numero % 2 == 0) {
    case '1':
        echo "el numero es par";
        break;
    case '2':
        echo "el numero es cero";
        break;
    default:
        echo "el numero es impar";
        break;
}
?>
