<!-- Actividad 1:

Trascribir el ejemplo de la siguiente página, entenderlo, socializarlo con sus compañeros de grupo y luego explicarlo al instructor:

Deben tener en cuenta que deben crear dos archivos para modularizar el archivo principal que contiene la clase animal debe llamarse “Animal.php”, el otro archivo será donde vas a crear los objetos de tipo animal, y deberá llamarse ”UsodeAnimal.php”. -->

<?php

class Animal
{
    //declaracion de los atributos de la clase

    private $color;
    private $peso;

    //metodo constructor

    public function __construct($color, $peso){
        $this->color = $color;
        $this->peso = $peso;
    }

    //getters and setters accesos

    //getters

    public function getColor(){
        return $this->color;
    }

    public function getPeso(){
        return $this->peso;
    }

    //setters

    public function setColor($newColor){
        $this->color = $newColor;
    }

    public function setPeso($newPeso){
        $this->peso = $newPeso;
    }

    //metodos

    public function comer(){
        return 'Estoy comiendo!';
    }

    public function moverse(){
        return 'Me estoy moviendo!';
    }

    public function añadir_un_kilo(){
        $this->peso = $this->peso + 1;
    }

}

?>