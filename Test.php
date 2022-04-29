<?php
include_once("Segmento.php");
include_once("Punto.php");

principal(); // corremos el método principal

// metodos
function principal() {
    echo ("Inciando programa.\n");

    //creamos puntos
    $punto1 = new Punto(3, 4); //instancia 1
    $punto2 = new Punto(1, -2); //instancia 2

    //creamos segmento
    $segmento = new Segmento($punto1, $punto2);

    echo ($segmento); // mostramos segmento
}
