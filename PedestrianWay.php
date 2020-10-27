<?php

require 'HighWay.php';

final class PedestrianWay extends HighWay
{
    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Bike){
            $this-> setCurrentVehicle($vehicle);
        }
    }
}