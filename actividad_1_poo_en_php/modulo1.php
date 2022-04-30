<?php

class Hotel
{
    private $name;
    private $ubication;
    private $numStars;

    public function __construct($name, $ubication, $numStars){
        $this->name = $name;
        $this->ubication = $ubication;
        $this->numStars = $numStars;
    }

    //getters and setters

    public function getName(){
        return $this->name;
    }

    public function getUbication(){
        return $this->ubication;
    }

    public function getNumStars(){
        return $this->numStars;
    }

    public function setName($data){
        $this->name = $data;
    }

    public function setUbication($data){
        $this->ubication = $data;
    }

    public function setNumStars($data){
        $this->numStars = $data;
    }

    //metodos

    public function aumentar_una_estrella(){
        $this->numStars = $this->numStars + 1;
    }

    public function bajar_una_estrella(){
        $this->numStars = $this->numStars - 1;
    }

}

?>