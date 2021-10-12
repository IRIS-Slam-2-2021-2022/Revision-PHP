<?php

/**
 * Class Point
 */
class Point
{
    /**
     * @var float
     */
    private float $_abs;
    /**
     * @var float
     */
    private float $_ord;

    /**
     * Point constructor.
     * @param float $_abs
     * @param float $_ord
     */
    public function __construct(float $_abs, float $_ord) {
        $this->_abs = $_abs;
        $this->_ord = $_ord;
    }

    /**
     * @return float
     */
    public function getAbs(): float
    {
        return $this->_abs;
    }

    /**
     * @param float $_abs
     */
    public function setAbs(float $_abs): void
    {
        $this->_abs = $_abs;
    }

    /**
     * @return float
     */
    public function getOrd(): float
    {
        return $this->_ord;
    }

    /**
     * @param float $ord
     */
    public function setOrd(float $ord): void
    {
        $this->_ord = $ord;
    }


    /**
     * @param Point $p
     */
    public function calculerDistance(Point $p) {
        return sqrt(
            ($this->getAbs() - $p->getAbs()) ^ 2 +
            ($this->getOrd() - $p->getOrd() ^ 2)
        );
    }

    /**
     * @param Point $p
     */
    public function calculerMilieu(Point $p) {

    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return '(' . $this->_abs . ', ' . $this->_ord . ')';
    }
}
