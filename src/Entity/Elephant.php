<?php

use App\Entity\Mammal;

class Elephant extends Mammal{
    // Le constructeur
    public function __construct(private float $tuskLength){}

    // Les getteur et setteur de la propriété $tuskLength
    public function getTuskLength():float
    {
        return $this->tuskLength;
    }

    public function setTuskLength(float $tuskLength):void
    {
        $this->tuskLength = $tuskLength;
    }
    
    // La méthode crier de l'éléphant
    public function trumpet():string
    {
        return 'L\'élephant trompette';
    }

        public function move(): string
    {
        return 'L\'éléphant se déplace en marchant et en nageant parfois';
    }
}