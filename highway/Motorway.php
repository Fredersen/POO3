<?php
require_once 'HighWay.php';
require_once './vehicle/Car.php';

final class MotorWay extends HighWay
{

    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)  
    {
        if ($vehicle instanceof Car) {
            array_push($this->currentVehicles, $vehicle);
        } else {
            return "You can not drive on this road.";
        }
    }
}
