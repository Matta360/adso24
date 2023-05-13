<?php 
require_once('libro.php');

$libroNuevo = new libro();

$libroNuevo->mostrarLibros();
$libroNuevo->compararLibro();
?>