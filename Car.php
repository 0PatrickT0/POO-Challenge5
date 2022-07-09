<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

// Car.php
class Car extends Vehicle implements LightableInterface
{

    // Constantes
    
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // Attributs & Valeurs

    private string $energy = 'gas';
    private int $energyLevel = 200;
    private bool $hasParkBrake = true;

    // Constructeur

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    // Méthodes

    public function switchOn(): bool
    {
        return true;

    }

    public function switchOff(): bool
    {
        return false;
        
    }

    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): bool
    {
        if ($this->hasParkBrake) {
            throw new Exception("Parkbrake engaged !");
        }
        $this->currentSpeed = 0;
        return "Get started !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 100;
        return "Go !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "";
            $this->energyLevel--;
            $sentence .= "";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Getters & Setters

    public function getEnergy(): string
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
}
