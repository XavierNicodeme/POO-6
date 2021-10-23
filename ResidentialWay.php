<?php

final class ResidentialWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle) : object
    {
        $this->setCurrentVehicles([$vehicle]);
        return $vehicle;
    }
}