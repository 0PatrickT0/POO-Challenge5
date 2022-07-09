<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

// Bicycle.php
class Bicycle extends Vehicle implements LightableInterface
{

    // Constantes


    // Attributs & Valeurs

    private bool $hasLuggageRack = false;


    // Constructeur




    // Méthodes

    public function start(): string
    {
        $this->currentSpeed = 0;
        return "Get started !";
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    public function brake(): string
    {
        $this->currentSpeed = 0;
        return "Stop !";
    }

    public function switchOn(): bool
    {
        while ($this->currentSpeed > 10) {
            return true;
        }
        return false;
    }

    public function switchOff(): bool
    {
        return false;
    }


    // Getters & Setters


}
