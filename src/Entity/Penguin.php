<?php

require_once 'Bird.php';

use App\Entity\Bird;
use App\Entity\Interface\CanMakeSoundInterface;
use App\Entity\Interface\CanSwimInterface;

// Création de la classe Penguin non instanciable, grâce au mot-clé final
final class Penguin extends Bird implements CanMakeSoundInterface, CanSwimInterface{
    // Le constructeur
    public function __construct(private float $swimSpeed)
    {
    }

    // Les getteur et setteur de la propriété $swimSpeed
    public function getSwimSpeed(): float
    {
        return $this->swimSpeed;
    }

    public function setSwimSpeed(float $swimSpeed) : void
     {
        $this->swimSpeed = $swimSpeed;
    }
    
    // La méthode nager
    public function swim():string
    {
        return $this->name . ' peut nage';
    }

    
    // Surcharge de la méthode move()
    public function move():string
    {
        return "{$this->name} se déplace soit par la nage, la marche ou le vol temporaire";
    }

    // Utilisation de la méthode contractuelle makeSound() de l'interface CanMaKeSoundInterface
    public function makeSound(): string
    {
        return "{$this->name} fait un grognement";
    }    
}