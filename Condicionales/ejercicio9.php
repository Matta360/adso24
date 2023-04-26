<?php 
//9.Programa que permita a un usuario tomar una decisión del tipo de pago a usar. Si la cuenta es menor a $150000 pago en efectivo. Si no, si es de $150000 hasta $300000 pago con el celular (dinero electrónico). Si es mayor a $300000 hasta $600000, pago con la tarjeta de débito. Caso contrario, pago con la tarjeta de crédito.
$cuenta = readline("ingrese el monto de cuenta");

if ($cuenta <150000) {
    echo "su cuenta es de:\n", $cuenta, "pago en efectivo";
}if ($cuenta >=300000) {
    echo "su cuenta es de:\n", $cuenta, "pago dinero electronico";
}elseif ($cuenta >=600000) {
    "su cuenta es de:\n". $cuenta. "pago con tarjeta de debito/credito";
}
?>