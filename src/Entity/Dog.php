<?php
namespace App\Entity;

// Classe Chien jamais instanciable
final class Dog extends Mammal{
    // Le constructeur
    // breed c'est la race d'un chien
    public function __construct(private string $breed) {}

    // Les getteur et setteur de la propriété $breed
    public function getBreed():string{
        return $this->breed;
    }

    public function setBreed(string $breed){
        $this->breed = $breed;

    }

    public function move(): string
    {
        return 'Le chien se déplace en marchant';
    }
}