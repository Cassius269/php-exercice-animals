<?php

namespace App\Entity;

require_once 'Animal.php';
use App\Entity\Animal;
abstract class Mammal extends Animal {
    
    public function __construct(protected string $furColor){
    }

    public function getFurColor():string
    {
        return $this->furColor;
    }

    public function setFurColor(string $furColor):void
    {
        $this->furColor =  $furColor;
    }

}