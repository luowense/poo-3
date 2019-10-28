<?php

require_once "src/Way/Highway.php";
require_once "src/Vehicles/Vehicle.php";

final class PedestrianWay extends HighWay{

    protected $currentVehicles = [];
    const NUMBERLANES = 1;
    const MAXSPEED = 10;

    public function __construct()
    {
        $this->numberLanes = self::NUMBERLANES;
        $this->maxSpeed = self::MAXSPEED;
    }

    public function addVehicle($vehicleType)
    {
        if($vehicleType instanceof Bike){
            array_push($this->currentVehicles, $vehicleType);
        }
        if($vehicleType instanceof Skateboard){
            array_push($this->currentVehicles, $vehicleType);
        }
    }
    public function getNumberLanes(){
        return $this::MAXSPEED;
    }
}