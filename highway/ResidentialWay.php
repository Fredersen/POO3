<?php
require_once 'HighWay.php';
require_once './vehicle/Car.php';

final class ResidentialWay extends HighWay
{
    protected int $nbLane = 2;
    protected int $maxSpeed = 50;

    public function addVehicle(Vehicle $vehicle)  
    {
        array_push($this->currentVehicles, $vehicle);
    }
}
