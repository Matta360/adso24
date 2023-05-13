<?php 
//Diseñar una función que muestre sí un número es par o impar

function cero ($numero){

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
}
   cero(readline("ingrese un numero: "))
?>