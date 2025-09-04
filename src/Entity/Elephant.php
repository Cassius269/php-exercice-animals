<?php

require_once 'Mammal.php';

use App\Entity\Interface\CanMakeSoundInterface;
use App\Entity\Mammal;

class Elephant extends Mammal implements CanMakeSoundInterface {
    // Le constructeur
    public function __construct(string $name, int $age, private float $tuskLength){
        parent::__construct($name, $age);
    }

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

    // Utilisation de la méthode contractuelle makeSound() de l'interface CanMaKeSound
    public function makeSound(): string
    {
        return $this->trumpet();
    }
}