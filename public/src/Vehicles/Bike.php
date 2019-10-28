<?php

require_once 'src/Vehicles/Vehicle.php';

class Bike extends Vehicle {

    public function __construct($color, $nbWheels)
    {
        parent::__construct($color, $nbWheels);
    }
}