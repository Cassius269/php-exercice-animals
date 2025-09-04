<?php

use App\Entity\Bird;
// Création de la classe Penguin non instanciable, grâce au mot-clé final
final class Penguin extends Bird{
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
        return $this->name . ' nage';
    }

    
    // Surcharge de la méthode move()
    public function move():string
    {
        return "{$this->name} se déplace soit par la nage, la marche ou le vol temporaire";
    }
}