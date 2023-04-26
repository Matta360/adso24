<?php 
//7.El precio que debe pagar un cliente por una pizza depende del tamaño seleccionado, como se muestra a continuación:
$pizza = readline("tamaño de porcion a elegir");
$adicional = readline("ingredientes a aplicar a la pizza");
$adicional = 4000;
switch ($pizza) {
    case '1':
        echo "el tamaño de su pizza es:", $pizza, "el valor es de $15.000 mas", 15000 + $adicional++;
        break;
    case '2':
        echo "el tamaño de su pizza es:", $pizza, "el valor es de $24.000 mas", 25000 + $adicional++;
        break;
    default:
        echo "el tamaño de su pizza es:", $pizza, "el valor es de $36.000 mas", 36000 + $adicional++;
        break;
}
?>