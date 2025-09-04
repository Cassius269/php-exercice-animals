<?php
namespace App\Entity;
abstract class Animal {
    // Le constructeur
    public function  __construct(protected string $name, protected int $age){

    }

    // Les getteurs et setteurs
    public function getName():string
    {
        return $this->name;
    }

    public function setName(string $name):void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(float $age):void
    {
        $this->age= $age;
    }

    abstract public function move():string;
  
}