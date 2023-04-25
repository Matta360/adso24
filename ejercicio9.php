<?php
//9.Programa que permita a una tienda saber el valor que pagara un cliente por la compra de varios elementos de la misma referencia. Debe tener como entradas el valor unitario, la cantidad de productos comprados y al valor final se debe adicionar el 16% correspondiente al IVA.
$producto1 = 5000;
$producto2 = 2800;
$producto3 = 8500;
$producto4 = 13000;

$compra = $producto1 + $producto2 + $producto3 + $producto4;
$compraproc = 4;
$iva = $compra * 1.21;

echo "el total de la compra es:",$compra;
echo ("<br>");
echo "los productos comprados es:",$compraproc;
echo ("<br>");
echo "IVA:",$iva;
echo ("<br>");
?>