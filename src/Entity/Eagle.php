<?php

use App\Entity\Bird;

class Eagle extends Bird{
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
}