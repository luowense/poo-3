<?php

require_once 'src/Vehicles/Vehicle.php';

class Car extends Vehicle{

    public function __construct($color, $nbWheels)
    {
        parent::__construct($color, $nbWheels);
    }
}