<?php
abstract class HighWay {
    /**
     * @var array to define the number of vehicles
     */
    private $currentVehicles;
    /**
     * @var int
     */
    private $numberLanes;
    /**
     * @var int
     */
     private $maxSpeed;


    abstract function addVehicle($currentVehicles);

    public function getCurrentVehicles(){
        return $this->currentVehicles;
    }

    public function getNumberLanes(){
        return $this->numberLanes;
    }

    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
}

