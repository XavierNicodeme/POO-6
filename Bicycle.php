<?php

class Bicycle
{
    private string $color;
    private  int $currentSpeed;
    private  int $nbSeats = 1;
    private  int $nbWheels = 2;
    public  function forward(): string
    {
        $this->currentSpeed = 15;

        return "Go !";
    }

    public function brake(): string
    {
        $sentence ="";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }


    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if ($currentSpeed >= 0) {
            $this->curentSpeed = $currentSpeed;
        }
    }
}

class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 200;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 20;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function start(): string
    {
        $this->currentSpeed = 0;
            return "Let's go";

    }
    public function forward(): string
    {
        $this->currentSpeed = 200;
        return "Go !";
    }
    public function brake(): string
    {
        $brake = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 20;
            $brake .= "Brake now !";
        }
        $brake .= "I'm stopped";
        return $brake;
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    public function getColor(): string
    {
        return $this->color;
    }
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }
    public function getEnergy(): int
    {
        return $this->energy;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

}


