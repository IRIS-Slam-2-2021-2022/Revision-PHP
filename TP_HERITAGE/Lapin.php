<?php

class Lapin extends Animal
{
    public function seDeplacer(): string
    {
        return 'Je cours à la vitesse de ' . \strval($this->getVitesse());
    }
}
