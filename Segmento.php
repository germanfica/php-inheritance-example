<?php

class Segmento {
    // == fields ==
    private $p1;
    private $p2;
    // == constructors ==
    public function __construct(Punto $unPunto1, Punto $otroPunto2) {
        $this->p1 = $unPunto1;
        $this->p2 = $otroPunto2;
    }
    // == getters ==
    public function getP1(): Punto {
        return $this->p1;
    }
    public function getP2(): Punto {
        return $this->p2;
    }
    // == setters ==
    public function setP1($p): void {
        $this->p1 = $p;
    }

    public function setP2($p): void {
        $this->p2 = $p;
    }
    // == type-specific ==
    public function __toString() {
        $cad = "Los puntos del segemento: " . $this->getP1() . " , " . $this->getP2();
        return $cad;
    }
}
