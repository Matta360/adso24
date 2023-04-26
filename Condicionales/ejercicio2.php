<?php 
//2.Preguntar al usuario el nombre y la edad, si es mayor o igual a 18 años mostrar el mensaje "Usted es mayor de edad", de lo contrario "Usted es menor de edad". Si el número ingresado es negativo o la edad ingresada es mayor a 100 años, mostrar al usuario un mensaje de ingresar una edad válida.
$nombre = readline("ingrese su nombre");
$edad = readline("ingrese su edad");


switch ($edad <18) {
    case '1':
        echo $nombre,"udted es mayor de edad";
        break;
    case '2':
        echo $nombre,"udted es menor de edad";
        break;
    case '3':
        echo "edad fuera del rango";
        break;
    default:
        echo "edad invalidad";
        break;
}
?>
