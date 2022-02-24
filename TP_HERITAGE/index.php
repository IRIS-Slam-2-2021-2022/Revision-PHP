<?php

require_once('./Animal.php');
require_once('./Lapin.php');
require_once('./Chien.php');
require_once('./Poisson.php');
require_once('./Animalerie.php');

$lapin = new Lapin('Bunny', 10);
$poisson = new Poisson('Nemo', 7);
$chien = new Chien('Rex', 3);

$animalerie = new Animalerie();
$animalerie->addAnimal($lapin);
$animalerie->addAnimal($poisson);
$animalerie->addAnimal($chien);

echo $animalerie->listAnimal();
