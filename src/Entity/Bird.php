<?php
namespace App\Entity;

require_once 'Animal.php';
use App\Entity\Animal;
abstract class Bird extends Animal{
    // Le constructeur
    public function __construct(private float $wingSpan){}

    // Les getteur et setteur de la propriété $wingSpan
    public function getWingSpan():float
    {
        return $this->wingSpan;
    }

    public function setWingspan(float $wingSpan):void
    {
        $this->wingSpan = $wingSpan;
    }
}