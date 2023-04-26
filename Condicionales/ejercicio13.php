<?php 
//13.Un reporte de salud muestra una tabla diferente del índice de masa corporal IMC de una persona que se calcula con la fórmula IMC=P/T en donde P es el peso en Kg. y T es la talla en metros. Lea un valor de P y de T, calcule el IMC y muestre su estado según la siguiente tabla:
$peso = readline("ingrese su peso corporal");
$estatura = readline("ingrese su talla en metros");

$imc = $peso / $estatura ;

switch ($imc) {
    case '1':
        echo "su imc es:", $imc, "su estado es desnutrido";
        break;
    case '2':
        echo "su imc es:", $imc, "su estado es normal";
        break;
    case '3':
        echo "su imc es:", $imc, "su estado es sobrepeso";
        break;
    case '4':
        echo "su imc es:", $imc, "su estado es Obesidad Grado 1";
        break;
    case '5':
        echo "su imc es:", $imc, "su estado es Obesidad Grado 2";
        break;
    default:
        echo "su imc es:", $imc, "su estado es Obesidad Grado 3";
        break;
}

?>