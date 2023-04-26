<?php
//6.Crear un programa con un menú de opciones, que permita calcular las áreas de figuras geométricas (cuadrado, rectángulo, triángulo, círculo, rombo y trapecio).
$menu = readline("menu de figuras");
echo ("<br>");
echo("cuadrado, rectángulo, triángulo, círculo, rombo y trapecio");

switch ($menu) {
    case 'cuadrado':
        echo "es cuadrado";
        break;
    case 'rectángulo':
        echo "es cuadrado";
        break;
    case 'triángulo':
        echo "es cuadrado";
        break;
    case 'círculo':
        echo "es cuadrado";
        break;
    case 'rombo':
        echo "es cuadrado";
        break;
    case 'trapecio':
        echo "es cuadrado";
        break;
    default:
        echo "figura invalida";
        break;
}
?>