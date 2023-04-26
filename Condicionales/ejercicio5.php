<?php 
//5.Solicitar notas de 0.0 a 5.0 a un estudiante y calcular promedio.  Mostrar como "Aprobó" si el promedio es mayor o igual a 3.0, o mostrar "No aprobó" si su nota es menor a 3.0. 
echo "ingrese sus notas de 0.0 a 5.0";
echo ("<br>");
$nota1 = readline("nota 1:");
$nota2 = readline("nota 2:");
$nota3 = readline("nota 3:");
$nota4 = readline("nota 1:");

$promedio = $nota1 + $nota2 + $nota3 + $nota4;
$total = $promedio / 4;

if ($total>=3.0) {
    echo $total, "aprobado";
}elseif ($total <=3.0){
    echo $total, "no aprobado";
}
?>
