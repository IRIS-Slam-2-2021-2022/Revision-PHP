<?php

class Animal
{
    protected string    $nom;
    protected int       $vitesse;

    /**
     * @param string $nom
     * @param int $vitesse
     */
    public function __construct(
        string $nom,
        int $vitesse
    )
    {
        $this->nom = $nom;
        $this->vitesse = $vitesse;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     * @return void
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return int
     */
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * @param int $vitesse
     * @return void
     */
    public function setVitesse(int $vitesse): void
    {
        $this->vitesse = $vitesse;
    }

    public function seDeplacer(): string
    {
        return 'Je me déplace à la vitesse de ' . \strval($this->getVitesse());
    }

    public function __toString(): string
    {
        return "Je suis un " . get_class($this) . ". Mon nom est " . $this->getNom() . ". " . $this->seDeplacer();
    }
}
