<?php
    require 'vendor/autoload.php';

    use App\Car;

    $car = new Car(1);

    try{
        echo $car->start();
    }
    catch (Exception $e){
        $car->setParkBrake(0);
        echo 'Message: ' . $e->getMessage() . '<br>';
    }
    finally {
        echo 'Ma voiture roule comme un donut.<br>';
    }