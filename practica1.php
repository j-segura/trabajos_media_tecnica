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

$libro1 = new libro('los juegos del hambre', 'novela', 'Suzanne Collins', 374);
$libro2 = new libro('the 100', 'novela', 'alguien', 304);
$libro3 = new libro('The wicher', 'accion', 'juans', 774);
$libro4 = new libro('Elite', 'sexo', 'larry', 474);

function imprimirLibros($data) {
    echo $data->obtenerTitulo();
    echo '<br>';
    echo $data->obtenerGenero();
    echo '<br>';
    echo $data->obtenerAutor();
    echo '<br>';
    echo $data->obtenerNumPag();
    echo '<br>';
    echo '<br>';
}

imprimirLibros($libro1);
imprimirLibros($libro2);
imprimirLibros($libro3);
imprimirLibros($libro4);


/* segunda clase */

class jugos
{
    private $sabor;
    private $precio;
    private $tamaño;

    public function __construct($sabor, $precio, $tamaño)
    {
        $this->sabor = $sabor;
        $this->precio = $precio;
        $this->tamaño = $tamaño;
    }

    public function getSabor(){
        return 'El sabor del jugo es: ' .$this->sabor;
    }

    public function getPrecio(){
        return 'Su respectivo precio es: ' .$this->precio;
    }

    public function getTamaño(){
        return 'El tamaño de su eleccion es: ' .$this->tamaño;
    }

    /* metodos setters */

    public function setSabor($data){
        $this->sabor = $data;
    }

    public function setPrecio($data){
        $this->precio = $data;
    }

    public function setTamaño($data){
        $this->tamaño = $data;
    }
}
 
$jugo1 = new jugos('Limon', 1.50, 'pequeño');
$jugo2 = new jugos('Mora', 1.70, 'mediano');
$jugo3 = new jugos('Mango', 2.50, 'grande');

function imprimirJugos($data) {
    echo $data->getSabor();
    echo '<br>';
    echo $data->getPrecio();
    echo '<br>';
    echo $data->getTamaño();
    echo '<br>';
    echo '<br>';
}

$jugo1->setSabor('FresaApiñada');

imprimirJugos($jugo1);
imprimirJugos($jugo2);
imprimirJugos($jugo3);


class Games
{
    private $nombre;
    private $genero;
    private $precio;

    public function __construct($nombre, $genero, $precio)
    {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->precio = $precio;
    }

    public function getNombre(){
        return 'Titulo del video juego: ' .$this->nombre;
    }

    public function getGenero(){
        return 'Genero del video juego: ' .$this->genero;
    }

    public function getPrecio(){
        return 'Precio de este: ' .$this->precio;
    }

    public function setNombre($data){
        $this->nombre = $data;
    }

    public function setGenero($data){
        $this->genero = $data;
    }

    public function setPrecio($data){
        $this->precio = $data;
    }


}

$game1 = new games('GTA5', 'accion-sexo', 40);
$game2 = new games('Tom Raider', 'aventura', 60);
$game3 = new games('Minecraft', 'supervivencia', 50);
$game4 = new games('Outlast', 'terror', 100);

function imprimirGames($data) {
    echo $data->getNombre();
    echo '<br>';
    echo $data->getGenero();
    echo '<br>';
    echo $data->getPrecio();
    echo '<br>';
    echo '<br>';
}

imprimirGames($game1);
imprimirGames($game2);
imprimirGames($game3);
imprimirGames($game4);


/* clase para trespa */

class licor{
    
    private $nombre;
    private $sabor;
    private $alcohol;
    private $color;

    public function __construct($nombre, $sabor, $alcohol, $color)
    {
        $this->nombre = $nombre;
        $this->sabor = $sabor;
        $this->alcohol = $alcohol;
        $this->color = $color;
    }

    /* getters */

    public function obtenerNombre(){
        return $this->nombre;
    }

    public function obtenerSabor(){
        return $this->sabor;
    }

    public function obtenerAlcohol(){
        return $this->alcohol;
    }

    public function obtenerColor(){
        return $this->color;
    }

    /* setters */

    public function ponerNombre($trespa){
        $this->nombre = $trespa;  
    }

    public function ponerSabor($trespa){
        $this->sabor = $trespa;  
    }

    public function ponerAlcohol($trespa){
        $this->alcohol = $trespa;
    }
    
    public function ponerColor($trespa){
        $this->color = $trespa;
    }

    public function aumentar_uno_cantidad_alcohol(){
        $this->alcohol = $this->alcohol + 1;
        return $this->alcohol;
    }

}

$segura = new licor("vino","uva",5,"lila");
$segura1 = new licor("ron","uva",5,"lila");
$segura2 = new licor("fourloco","uva",5,"lila");
$segura3 = new licor("dfasf","uva",5,"lila");


function imprimirLicor($burgos){
    echo "el nombre del licor es: " .$burgos->obtenerNombre();
    echo '<br>';
}

imprimirLicor($segura);
imprimirLicor($segura2);
imprimirLicor($segura3);
imprimirLicor($segura4);


/* function areaRectangulo($base, $altura){

    $area = $base * $altura;
    return 'el area del rectangulo es: ' .$area;

}

echo areaRectangulo(300, 4); */


?>

