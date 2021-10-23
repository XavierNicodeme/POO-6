<?php

require_once 'Vehicle.php';
require_once 'Car.php';



$car = new Car('black', 5, 40);

try {
    $car->forward();
}
catch (Exception $e) {
    echo $e->getMessage() . '<br>';
    $car->setHasParkBrake(false);
}
finally {
    echo 'Ma voiture roule comme un donut';
}
var_dump($car);





