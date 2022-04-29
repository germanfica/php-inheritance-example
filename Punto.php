<?php

class Punto {
    // == fields ==
    private $coordX;
    private $coordY;
    // == constructors ==
    public function __construct(int $coordX, int $coordY) {
        $this->coordX = $coordX;
        $this->coordY = $coordY;
    }
    // == getters ==
    public function getCoordX(): int {
        return $this->coordX;
    }
    public function getCoordY(): int {
        return $this->coordY;
    }
    // == setters ==
    public function setCoordX($coord): void {
        $this->coordX = $coord;
    }
    public function setCoordY($coord): void {
        $this->coordY = $coord;
    }
    // == type-specific ==
    public function __toString() {
        $cad = "Coord X: ".$this->getCoordX()." , "."Coord Y: ".$this->getCoordY();
        return $cad;
    }
    public function trasladar(float $deltaX, float $deltaY): void {
        echo ("El punto se ha trasladado con éxito");
    }
    /**
     * Distancia entre dos puntos P y Q.
     */
    public function distancia(Punto $otro): float {
        $x = $this->getCoordX() - $otro->getCoordX();
        $y = $this->getCoordY() - $otro->getCoordY();
        return sqrt(pow($this->x, 2) + pow($this->y, 2));
    }
}
