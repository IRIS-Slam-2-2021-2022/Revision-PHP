<?php

require_once('Animal.php');

class Animalerie
{
    /**
     * @var array|Animal[]
     */
    protected array     $animaux;

    public function __construct()
    {
        $this->animaux = [];
    }

    /**
     * @return Animal[]|array
     */
    public function getAnimaux(): array
    {
        return $this->animaux;
    }

    /**
     * @param Animal[]|array $animaux
     */
    public function setAnimaux(array $animaux): void
    {
        $this->animaux = $animaux;
    }

    /**
     * @param Animal $animal
     * @return void
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animaux[] = $animal;
    }

    public function listAnimal(): string
    {
        $response = '';

        foreach ($this->animaux as $animal) {
            $response .= $animal->__toString() . PHP_EOL;
        }

        return $response;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
    }
}
