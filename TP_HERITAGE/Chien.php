<?php

class Chien extends Animal
{
    public function seDeplacer(): string
    {
        return 'Je saute à la vitesse de ' . \strval($this->getVitesse());
    }
}
