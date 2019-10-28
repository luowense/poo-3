<?php

require_once "src/Way/Highway.php";
require_once "src/Vehicles/Vehicle.php";

final class ResidentialWay extends HighWay{

    protected $currentVehicles = [];
    const NUMBERLANES = 3;
    const MAXSPEED = 50;

    public function __construct()
    {
        $this->numberLanes = self::NUMBERLANES;
        $this->maxSpeed = self::MAXSPEED;
    }

    public function addVehicle($vehicleType)
    {
        if($vehicleType instanceof Car){
            array_push($this->currentVehicles, $vehicleType);
        }
        if($vehicleType instanceof Skateboard){
            array_push($this->currentVehicles, $vehicleType);
        }
        if($vehicleType instanceof Bike){
            array_push($this->currentVehicles, $vehicleType);
        }
    }
}