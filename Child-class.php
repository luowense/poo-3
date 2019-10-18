<?php
require_once "Abstract-class.php";
require_once "vehicles.php";

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
