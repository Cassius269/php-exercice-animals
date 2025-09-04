<?php
require '../src/Entity/Dog.php';
require '../src/Entity/Eagle.php';
require_once '../src/Entity/Elephant.php';
require_once '../src/Entity/Penguin.php';

use App\Entity\Dog;

// Instanciation des animaux
// Chien
$bet = new Dog('berge allemand');
$bet->setName('Bet');

echo $bet->getName();
echo $bet->makeSound();
// Aigle
$talon = new Eagle('12');
$talon->setName('Talon');
$talon->setWingspan(12.5);
// var_dump($talon);

// Elephant
$dumbo = new Elephant('Dumbo', 10, 5);
echo '<br>';
$dumbo->makeSound();

// Pingouin
$chilly = new Penguin('12');
$chilly->setName('Chilly');
echo '<br>';
echo $chilly->makeSound();