<?php

class Poisson extends Animal
{
    public function seDeplacer(): string
    {
        return 'Je nage à la vitesse de ' . \strval($this->getVitesse());
    }
}
