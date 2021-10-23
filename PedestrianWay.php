<?php

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle) : object
    {
        if ($vehicle instanceof Bicycle || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles([$vehicle]);
        } else {
            echo 'The vehicle is too big';
        }
        return $vehicle;
    }
}