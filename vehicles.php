<?php

class Vehicle {

    protected $color;
    protected $nbWheels;


    public function __construct($color, $nbWheels){
        $this->color = $color;
        $this->nbWheels = $nbWheels;
    }
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
        return $this;
    }
    public function getNbWheels(){
        return $this->nbWheels;
    }
    public function setNbWheels($nbWheels){
        $this->nbWheels = $nbWheels;
        return $this;
    }
}

class Car extends Vehicle{

    public function __construct($color, $nbWheels)
    {
        parent::__construct($color, $nbWheels);
    }
}

class Skateboard extends Vehicle{

    public function __construct($color, $nbWheels)
    {
        parent::__construct($color, $nbWheels);
    }

}

class Bike extends Vehicle {

    public function __construct($color, $nbWheels)
    {
        parent::__construct($color, $nbWheels);
    }
}