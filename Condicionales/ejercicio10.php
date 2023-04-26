<?php 
//10.Leer el número de llantas de una compra y mostrar el valor que debe pagarse. El almacén las vende con la siguiente política: Si se compran menos de 6 llantas, el precio unitario es $240000. Si se compran 6 o 7, el precio unitario es $221000, y si se compran más de 7 llantas, el precio unitario es $180000.
$compra = readline("numeros de llantas a comprar");

if ($compra <6) {
    echo "compro:\n", $compra, "el precio unitario es $240000";
}if ($compra >=6) {
    echo "compro:\n", $compra, "el precio unitario es $221000";
}elseif ($compra >7) {
    "compro:\n". $compra. "el precio unitario es $180000.";
}
?>