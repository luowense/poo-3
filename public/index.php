<?php
require_once 'Bike.php';
require_once 'Car.php';
require_once 'Skateboard.php';
require_once 'Motorway.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bike = new Bike('white', 2);
$car = new Car('red', 4);
$car1 = new Car('blue', 4);
$skateboard = new Skateboard('blue', 4);

//ABOUT THE MOTORWAY
$motorWay1 = new Motorway();
$motorWay1->addVehicle($car);
$motorWay1->addVehicle($car1);

var_dump($motorWay1);

//ABOUT THE RESIDENTIAL WAY

$residentialWay1 = new ResidentialWay();
$residentialWay1->addVehicle($car);

var_dump($residentialWay1);

//ABOUT THE PEDESTRIAN WAY

$pedestrianWay1 = new PedestrianWay();
$pedestrianWay1->addVehicle($skateboard);

print_r($pedestrianWay1);
var_dump($pedestrianWay1::MAXSPEED);
var_dump($pedestrianWay1);