<?php

require_once 'Bird.php';

use App\Entity\Bird;
use App\Entity\Interface\CanMakeSoundInterface;

class Eagle extends Bird implements CanMakeSoundInterface {
    // Le constructeur
    public function __construct(private float $flightSpeed)
    { 
    }

    // Les getteur et setteur de la propriété $flightSpeed
    public function getFligthSpeed():float
    {
        return $this->flightSpeed;
    }

    public function setFligthSpeed(float $flightSpeed):void
    {
        $this->flightSpeed = $flightSpeed;
    }

    public function hunt():string
    {
        return 'L\'aigle chasse';
    }

    public function move():string
    {
        return 'L\'aigle se déplace';
    }

    // Utilisation de la méthode makeSound() contractuelle de l'interface CanMaKeSound
    public function makeSound(): string
    {
        return "{$this->name} crie";
    }
}