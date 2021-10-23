<?php

final class MotorWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle) : object
    {
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->setCurrentVehicles([$vehicle]);
        } else {
            echo 'you can\'t add this kind of vehicle here';
        }
        return $vehicle;
    }
}