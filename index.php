<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';

$bike = new Bicycle('white', 1);


$car = new Car('black', 5, 40);


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
//$truck->setStorage(199);
//echo $truck->isFull();

$motorWay = new MotorWay(4,130);
$pedestrianWay = new PedestrianWay(1, 10);
$residentialWay = new ResidentialWay(2, 50);

$skate = new Skateboard('blue',0);

$pedestrianWay->addVehicle($truck);
$motorWay->addVehicle($car);
$residentialWay->addVehicle($car);

var_dump($pedestrianWay);
//var_dump ($motorWay);



