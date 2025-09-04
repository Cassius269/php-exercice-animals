<?php

namespace App\Entity;

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