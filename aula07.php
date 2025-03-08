<?php
include_once("aula05.php");

class CirFilho extends Circle {

    protected $radius = 5;

    function __construct(){
    }
    public function getCircumference() {
        return 2 * round(pi(), 2) * $this->radius;
    }



}

$circulo = new CirFilho(); 
echo "perimetro {$circulo->getCircumference()}";






?>