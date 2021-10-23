<?php

require_once 'Vehicle.php';
require_once 'Car.php';



$car = new Car('black', 5, 40);


$car->setHasParkBrake(true);
var_dump($car);
try {
    $car->forward();
}
catch (Exception $e) {
    $car->setHasParkBrake(false);
}
finally {
    echo 'Ma voiture roule comme un donut';
}
var_dump($car);





