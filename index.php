<?php


require_once 'Bicycle.php';

$bike = new Bicycle('blue', 1);


echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike -> getCurrentSpeed() . ' km/h' . '<br>';
echo $bike -> brake();
echo '<br> Vitesse du vélo : ' . $bike -> getCurrentSpeed(). ' km/h' . '<br>';

require_once 'Cars.php';

$car1 = new Cars('red', 2, 'electric');

echo $car1->forward();
echo '<br> Speed of car : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';
echo $car1-> brake();
echo '<br> Speed of car : ' . $car1->getCurrentSpeed() . ' km/h' . '<br>';

require_once 'Truck.php';

$Truck1 = new Truck('yellow', 4, 200, 'fuel');
$Truck1->setCharge(150);

echo $Truck1->filling() . '<br>';
echo $Truck1->forward();
echo '<br> Speed of Truck : ' . $Truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $Truck1->brake();
echo '<br> Speed of Truck : ' . $Truck1->getCurrentSpeed() . ' km/h' . '<br>'; 
