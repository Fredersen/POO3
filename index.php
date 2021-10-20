<?php
require_once 'highway/Motorway.php';
require_once 'highway/PedestrianWay.php';
require_once 'highway/ResidentialWay.php';
require_once 'vehicle/Bicycle.php';
require_once 'vehicle/Skateboard.php';
require_once 'vehicle/Car.php';
require_once 'vehicle/Truck.php';


$road = new MotorWay(4, 130);

var_dump($road);

$voiture = new Car('red', 5, "fuel");

var_dump($voiture);

$road->addVehicle($voiture);

var_dump($road->getCurrentVehicles());

$skate = new Skateboard('black', 0);

var_dump($skate);

echo $road->addVehicle($skate);

