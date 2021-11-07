<?php

require_once 'Vehicle.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Speedometer.php';



$car = new Car('black', 5, 40);
$bike = new Bicycle('white', 1);

try {
    $car->forward();
}
catch (Exception $e) {
    echo $e->getMessage() . '<br>';
    $car->setHasParkBrake(false);
}
finally {
    echo 'Ma voiture roule comme un donut' . '<br>';
}


echo Speedometer::convertToKm(10);
echo Speedometer::convertToMiles(10);






