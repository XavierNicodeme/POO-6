<?php

require_once 'Bicycle.php';
require_once 'car.php';
require_once 'truck.php';

/*$bike = new Bicycle();
$bike->setColor('white');
$bike->setCurrentSpeed(0);


$car = new Car('black', 5, 40);

var_dump($car);*/

/*echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). ' km/h' . '<br>';
echo $bike->brake();*/

/*echo $car->start() . '<br>';
echo $car->forward();
echo '<br> Vitesse de la voiture: ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed(). ' km/h' . '<br>';
echo $car->brake();*/

/*$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('Green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);*/

$truck = new Truck(200, 'black', 2, 'fuel');
$truck->setStorage(199);
echo $truck->isFull();

