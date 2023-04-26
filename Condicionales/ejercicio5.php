<?php 
//5.Solicitar notas de 0.0 a 5.0 a un estudiante y calcular promedio.  Mostrar como "Aprobó" si el promedio es mayor o igual a 3.0, o mostrar "No aprobó" si su nota es menor a 3.0. 
echo "ingrese sus notas de 0.0 a 5.0";
echo ("<br>");
$nota1 = readline("nota 1:");
$nota2 = readline("nota 2:");
$nota3 = readline("nota 3:");
$nota4 = readline("nota 1:");

$promedio = $nota1 + $nota2 + $nota3 + $nota4;

if ($promedio >=3.0) {
    echo $promedio, "aprobado";
}elseif ($promedio <=3.0){
    echo $promedio, "no aprobado";
}
?>