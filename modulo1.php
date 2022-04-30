<?php

class libro
{
    private $titulo;
    private $genero;
    private $autor;
    private $num_pag;

    public function __construct($titulo, $genero, $autor, $num_pag)
    {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->autor = $autor;
        $this->num_pag = $num_pag;
    }

    public function obtenerTitulo(){
        return 'el titulo es: ' .$this->titulo;
    }

    public function obtenerGenero(){
        return 'el genero es: ' .$this->genero;
    }

    public function obtenerAutor(){
        return 'el autor del libro es: ' .$this->autor;
    }

    public function obtenerNumPag(){
        return 'numero de paginas: ' .$this->num_pag;
    }
}


?>