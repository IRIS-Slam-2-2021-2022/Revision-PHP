<?php

class Formation {
    /**
     * @var string
     */
    private string $_intitule;

    /**
     * @var int
     */
    private int $_nbrJours;

    /**
     * @var array
     */
    private array $_stagiaires;

    /**
     * Formation constructor.
     * @param string $_intitule
     * @param int $_nbrJours
     * @param array $_stagiaires
     */
    public function __construct(string $_intitule, int $_nbrJours, array $_stagiaires) {
        $this->_intitule = $_intitule;
        $this->_nbrJours = $_nbrJours;
        $this->_stagiaires = $_stagiaires;
    }

    /**
     * @return string
     */
    public function getIntitule(): string
    {
        return $this->_intitule;
    }

    /**
     * @param string $intitule
     */
    public function setIntitule(string $intitule): void
    {
        $this->_intitule = $intitule;
    }

    /**
     * @return int
     */
    public function getNbrJours(): int
    {
        return $this->_nbrJours;
    }

    /**
     * @param int $nbrJours
     */
    public function setNbrJours(int $nbrJours): void
    {
        $this->_nbrJours = $nbrJours;
    }

    /**
     * @return array
     */
    public function getStagiaires(): array
    {
        return $this->_stagiaires;
    }

    /**
     * @param array $stagiaires
     */
    public function setStagiaires(array $stagiaires): void
    {
        $this->_stagiaires = $stagiaires;
    }

    /**
     * Ajouter un stagiaire au tableau des stagiaires de la formation.
     *
     * @param Stagiaire $stagiaire
     */
    public function addStagiaire(Stagiaire $stagiaire): void {
        $this->_stagiaires[] = $stagiaire;
    }

    /**
     * Supprime un stagiaire du tableau des stagiaires de la formation
     *
     * @param Stagiaire $stagiaire
     */
    public function removeStagiaire(Stagiaire $stagiaire): void {
        // TODO - Supprimer le stagiaire du tableau;
    }

    /**
     * Calcule la moyenne des moyennes des élèves de la formation
     *
     * @return float
     */
    public function calculerMoyenneFormation(): float {
        $sommeDesMoyennes = 0;

        /** @var Stagiaire $stagiaire */
        foreach ($this->_stagiaires as $stagiaire) {
            $sommeDesMoyennes += $stagiaire->calculerMoyenne();
        }

        return $sommeDesMoyennes / count($this->_stagiaires);
    }
}
