<?php

require_once 'HighWay.php';
require_once './vehicle/Bicycle.php';
require_once './vehicle/Skateboard.php';

final class PedestrianWay extends HighWay
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)  
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
           array_push($this->currentVehicles, $vehicle);
        } else {
            return "You can not drive on this road.";
        }
    }
}
