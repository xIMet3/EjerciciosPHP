<?php

# CLASE HIJA
class bulldog extends chihuahua {

    function __construct($nombre_bull, $edad_bull, $estatura_bull, $raza)
    {
        parent:: __construct($nombre_bull, $edad_bull, $estatura_bull);
        $this->raza = $raza;
    }
    function __toString()
    {
        return $this->nombre. " ". $this->edad. " ". $this->estatura. " ". $this->raza;
    }

}