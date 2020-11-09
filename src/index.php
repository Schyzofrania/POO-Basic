<?php
require_once 'Car.php';
require_once 'Bike.php';
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

$car = new Car("red", 4, "electric");
$bike = new Bike("blue", 1);


echo $car->switchOn() . '<br>';
echo $car->switchOff() . '<br>';

$bike->setCurrentSpeed(8);
echo $bike->switchOn() . '<br>';
echo $bike->switchOff() . '<br>';

$bike->setCurrentSpeed(15);
echo $bike->switchOn() . '<br>';
echo $bike->switchOff() . '<br>';