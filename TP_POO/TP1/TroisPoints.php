<?php

class TroisPoints {

    private Point $_premier;
    private Point $_deuxieme;
    private Point $_troisieme;

    public function __construct(
        Point $_premierPoint,
        Point $_deuxiemePoint,
        Point $_troisiemePoint
    ) {
        $this->_premier = $_premierPoint;
        $this->_deuxieme = $_deuxiemePoint;
        $this->_troisieme = $_troisiemePoint;
    }

    /**
     * Retourne le premier point
     *
     * @return Point
     */
    public function getPremier(): Point {
        return $this->_premier;
    }

    public function setPremier(Point $p): void {
        $this->_premier = $p;
    }

    public function getDeuxieme(): Point {
        return $this->_deuxieme;
    }

    public function setDeuxieme(Point $p): void {
        $this->_deuxieme = $p;
    }

    public function getTroiseme(): Point {
        return $this->_troisieme;
    }

    public function setTroisieme(Point $p): void {
        $this->_troisieme = $p;
    }

    public function sontAlignes() {
        //1) Calculer la distance AC
        //2) Calculer la distance BC
        //3) Calculer la distance AB
        //4) Tester si AB == AC + BC et stocker le resultat dans une variable $premierTest
        //5) ...
        //END) return $premierTest && $deuxiemeTest && troisiemeTest
    }
}
