<?php

class Stagiaire {
    /**
     * @var string
     */
    private string $_nom;

    /**
     * @var array
     */
    private array $_notes;

    /**
     * Stagiaire constructor.
     */
    public function __construct(string $_nom, array $_notes) {
        $this->_notes = $_notes;
        $this->_nom = $_nom;
    }

    /**
     * @return string
     */
    public function getNom(): string {
        return $this->_nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void {
        $this->_nom = $nom;
    }

    public function getNotes(): array {
        return $this->_notes;
    }

    public function setNotes(array $notes): void {
        $this->_notes = $notes;
    }

    /**
     * Renvoie la moyenne des notes de l'élève
     *
     * @return float|int
     */
    public function calculerMoyenne(): float {
        $somme = 0;

        // $this->_notes = [12, 3, 20, 11, 16, 7];
        foreach ($this->_notes as $note) {
            $somme += $note;
        }

        return $somme / count($this->_notes);
    }

    /**
     * Renvoie la moyenne des notes de l'élève
     *
     * @return float|int
     */
    public function calculerMoyenneOpti(): float {
        return array_sum($this->_notes) / count($this->_notes);
    }

    /**
     *
     * Trouve la note maximal de l'élève
     *
     * @return float
     */
    public function trouverMax(): float {
        $max = 0;

        foreach ($this->_notes as $note) {
            if ($note > $max) {
                $max = $note;
            }
        }

        return $max;
    }

    /**
     *
     * Trouve la note minimal de l'élève
     *
     * @return float
     */
    public function trouverMin(): float {
        $min = 20;

        foreach ($this->_notes as $note) {
            if ($note < $min) {
                $min = $note;
            }
        }

        return $min;
    }
}
