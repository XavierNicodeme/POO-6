<?php

require_once 'Bicycle.php';

$bike = new Bicycle();
$bike->setColor('white');
$bike->setCurrentSpeed(0);


$car = new Car('black', 5, 40);

var_dump($car);

/*echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();*/

echo $car->start() . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
echo $car->brake();


