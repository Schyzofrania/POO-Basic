<?php 

abstract class HighWay
{
    protected $currentVehicle = [];
    protected $nbLane;
    protected $maxSpeed;

    abstract public function addVehicle($vehicle);

    public function setCurrentVehicle($currentVehicle){
        $this->currentVehicle = $currentVehicle;
    }

    public function setNbLane($nbLane){
        $this->nbLane = $nbLane;
    }

    public function setMaxSpeed($maxSpeed){
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicle(){
        return $this->currentVehicle;
    }

    public function getNbLane(){
        return $this->nbLane;
    }
    
    public function getMaxSpeed(){
        return $this->maxSpeed;
    }
}