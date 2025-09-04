<?php
namespace App\Entity;

require_once 'Mammal.php';
require_once 'Interface/CanMakeSoundInterface.php';
require_once 'Interface/CanSwimInterface.php';

use App\Entity\Interface\CanMakeSoundInterface;
use App\Entity\Interface\CanSwimInterface;
use App\Entity\Mammal;

// Classe Chien jamais instanciable
final class Dog extends Mammal implements CanMakeSoundInterface, CanSwimInterface {
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

    // Création de la méthode d'aboiement des chiens
    public function bark():string
    {
        return "{$this->name} aboie";
    }
 
    // Utilisation de la méthode contractuelle makeSwound() de l'interface CanMaKeSoundInteface
    public function makeSound(): string
    {
        return $this->bark();
    } 

    // Utilisation de la méthode contractuelle swim() de l'interface CanSwimInteface
    public function swim(): string
    {
        return "{$this->name} peut nager";
    }
}