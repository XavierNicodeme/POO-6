<?php
 require_once 'Vehicle.php';
 require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    private string $energy;
    private int $energyLevel = 20;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private bool $hasParkBrake = true;

    public function switchOn(): bool
    {
        return true;
    }
    public function switchOff(): bool
    {
        return false;
    }
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function forward() : string
    {
        if ($this->hasParkBrake) {
            throw new Exception('Remove your brakes bro');
        }
        return parent::forward();
    }

    public function getEnergy(): int
    {
    return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;

    }
    public function getEnergyLevel(): int
    {
    return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    /**
     * @return bool
     */
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

}