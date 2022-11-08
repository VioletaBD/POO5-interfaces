<?php

require_once 'Vehicle.php';
require_once 'LightableInterface';

class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)

    {

        parent::__construct($color, $nbSeats);
        $this->setEnergy = $energy;
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this
    }
}
