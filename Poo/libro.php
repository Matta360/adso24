<?php
 class libro {
    private $autor;
    private $titulo;
    private $paginas;

    public function _construct()
    {
        $autor = readline("");
        $titulo = readline("");
        $paginas = readline("");
    }
    public function mostrarLibros()
    {
        echo "El libro TITULO, del AUTOR, tiene PAGINAS paginas";
    }
    public function compararLibro(){
        echo readline("ingrese el numero de");

    }

 }
?>