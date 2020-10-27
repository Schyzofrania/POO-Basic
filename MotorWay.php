<?php

require 'HighWay.php';

final class MotorWay extends HighWay
{
    protected $nbLane = 4;

    protected $maxSpeed = 130;

    public function addVehicle($vehicle)
    {
        if($vehicle instanceof Car){
            $this-> setCurrentVehicle($vehicle);
        }
    }
}