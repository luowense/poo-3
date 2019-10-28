<?php

require_once "src/Way/Highway.php";
require_once "src/Vehicles/Vehicle.php";

final class Motorway extends HighWay{

    protected $currentVehicles = [];
    const NUMBERLANES = 4;
    const MAXSPEED = 130;

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
    }
}